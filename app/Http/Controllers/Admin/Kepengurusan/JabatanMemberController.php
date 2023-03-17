<?php

namespace App\Http\Controllers\Admin\Kepengurusan;

use App\Http\Controllers\Controller;
use App\Models\Keanggotaan\Anggota;
use App\Models\Kepengurusan\Anggota as KepengurusanAnggota;
use App\Models\Kepengurusan\Jabatan as KepengurusanJabatan;
use App\Models\Kepengurusan\Periode as KepengurusanPeriode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;
use League\Flysystem\Exception;

// pengurus
use App\Models\Pengurus\PeriodeMember;
use App\Models\Pengurus\Jabatan;
use App\Models\Pengurus\JabatanMember;
use App\Models\Pengurus\Periode;
use Error;

class JabatanMemberController extends Controller
{
    public function index(KepengurusanJabatan $jabatan, Request $request)
    {

        $anggotas = $jabatan->anggotas()->with('anggota')->get();

        $navigation = h_prefix('periode', 3);

        // page atribut
        $page_attr = [
            'title' => "Anggota Bidang " . $jabatan->nama,
            'breadcrumbs' => [
                ['name' => 'Kepengurusan'],
                ['name' => 'Periode', 'url' => $navigation],
                ['name' => 'Bidang', 'url' => ['admin.kepengurusan.jabatan', $jabatan->periode_id]],
            ],
            'navigation' => $navigation,
        ];
        return view('admin.kepengurusan.jabatan.member', compact('page_attr', 'jabatan', 'anggotas'));
    }

    public function select2(Request $request)
    {
        try {
            $model = Anggota::select(['id', DB::raw("concat(angkatan,' | ',nama) as text")])
                ->whereRaw("(
                    `nama` like '%$request->search%' or
                    `alamat_lengkap` like '%$request->search%' or
                    `angkatan` like '%$request->search%'
                    )")
                ->limit(10);

            $result = $model->get()->toArray();
            return response()->json(['results' => $result]);
        } catch (\Exception $error) {
            return response()->json($error, 500);
        }
    }

    public function save(Request $request)
    {
        try {
            $request->validate([
                'anggotas' => ['required'],
                'periode_id' => ['required', 'int'],
                'jabatan_id' => ['required', 'int'],
            ]);
            $t_jabatan = KepengurusanJabatan::tableName;
            $t_anggota = KepengurusanAnggota::tableName;

            DB::beginTransaction();

            // check
            if (!auth_has_role(config('app.super_admin_role'))) {
                $periode = KepengurusanPeriode::where('id', '=', $request->periode_id)->first();
                if ($periode->status == 0) {
                    throw new Error("Anda tidak mempunyai izin untuk mengubah data di periode ini. (Status periode ini tidak aktif Silahkan hubungi administrator)");
                }
            }


            // delete anggota jabatan terlebih dahulu
            $current = KepengurusanAnggota::where('jabatan_id', $request->jabatan_id)->delete();

            // masukan ke jabatan
            foreach ($request->anggotas as $anggota) {
                // cek terlebih dahulu apakah anggota ini sudah ada jabatan di periode ini ?
                $cek = KepengurusanAnggota::join($t_jabatan, "$t_jabatan.id", '=', "$t_anggota.jabatan_id")
                    ->where("$t_jabatan.periode_id", $request->periode_id)
                    ->where("$t_anggota.anggota_id", $anggota)
                    ->first();

                if ($cek != null) {
                    $jabatan_text = $cek->jabatan->nama;
                    if ($cek->jabatan->parent) {
                        $jabatan_text .= (" -> " . $cek->jabatan->parent->nama);
                    }
                    throw new Error($cek->anggota->nama . " Sudah terdaftar sebagai $jabatan_text");
                }

                // jika sudah aman maka masukan ke database
                $new_anggota = new KepengurusanAnggota();
                $new_anggota->anggota_id = $anggota;
                $new_anggota->jabatan_id = $request->jabatan_id;
                $new_anggota->save();
            }
            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    private function getNamaUsersById(int $id): string
    {
        $user = User::selectRaw("concat(angkatan,' | ',name) as text")->where('id', '=', $id)->first();
        if (!$user) return "";
        return $user->text;
    }

    private function cekPeriodeMember(int $periode_id, int $id): bool
    {
        $member = PeriodeMember::where('periode_id', '=', $periode_id)
            ->where('user_id', '=', $id)
            ->delete(['user_id']);

        return $member ? true : false;
    }
}