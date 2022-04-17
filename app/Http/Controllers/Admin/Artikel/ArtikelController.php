<?php

namespace App\Http\Controllers\Admin\Artikel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel\Artikel;
use League\Config\Exception\ValidationException;
use Yajra\Datatables\Datatables;
use App\Helpers\Summernote;
use App\Models\Artikel\Kategori;
use App\Models\Artikel\Tag;
use App\Models\ArtikelKategori;
use App\Models\ArtikelTag;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    private $image_folder = 'artikel';
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $model = Artikel::select(['id', 'nama', 'slug', 'excerpt', 'status', 'created_at', 'date'])
                ->selectRaw('IF(status = 1, "Dipublish", "Disimpan") as status_str');

            // filter
            if (isset($request->filter)) {
                $filter = $request->filter;
                if ($filter['status'] != '') {
                    $model->where('status', '=', $filter['status']);
                }
            }

            return Datatables::of($model)
                ->addIndexColumn()
                ->make(true);
        }
        $page_attr = [
            'title' => 'Manage List Artikel',
            'breadcrumbs' => [
                ['name' => 'Artikel'],
            ]
        ];
        return view('admin.artikel.data.list', compact('page_attr'));
    }

    public function add(Request $request)
    {
        $navigation = 'admin.artikel.data';
        $page_attr = [
            'title' => 'Tambah Artikel',
            'breadcrumbs' => [
                ['name' => 'Artikel'],
                ['name' => 'Manage List Artikel', 'url' => $navigation],
            ],
            'navigation' => $navigation
        ];

        return view('admin.artikel.data.add', compact('page_attr'));
    }

    public function edit(Artikel $artikel)
    {
        $navigation = 'admin.artikel.data';
        $page_attr = [
            'title' => 'Edit Artikel',
            'breadcrumbs' => [
                ['name' => 'Artikel'],
                ['name' => 'Manage List Artikel', 'url' => $navigation],
            ],
            'navigation' => $navigation
        ];
        $edit = true;
        $tbl = ArtikelKategori::tableName;
        $kategori = ArtikelKategori::select([
            'artikel_kategori.nama as text',
            'artikel_kategori.id'
        ])
            ->join('artikel_kategori', "$tbl.kategori_id", '=', "artikel_kategori.id")
            ->where("$tbl.artikel_id", "=", $artikel->id)
            ->get();

        $tbl = ArtikelTag::tableName;
        $tag = ArtikelTag::select([
            'artikel_tag.nama as text',
            'artikel_tag.id'
        ])
            ->join('artikel_tag', "$tbl.tag_id", '=', "artikel_tag.id")
            ->where("$tbl.artikel_id", "=", $artikel->id)
            ->get();
        return view('admin.artikel.data.add', compact('page_attr', 'edit', 'artikel', 'kategori', 'tag'));
    }

    public function insert(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'nama' => ['required', 'string', 'max:255'],
                'slug' => ['required', 'string', 'max:255', 'unique:artikel'],
                'detail' => ['required'],
                'date' => ['required'],
                'excerpt' => ['required'],
                'status' => ['required', 'int'],
            ]);
            $detail = Summernote::insert($request->detail, $this->image_folder, substr($request->slug, 0, 10));

            $model = Artikel::create([
                'nama' => $request->nama,
                'slug' => $request->slug,
                'excerpt' => $request->excerpt,
                'date' => $request->date,
                'status' => $request->status,
                'detail' => $detail->html,
                'foto' => $detail->first_img,
                'user_id' => auth()->user()->id,
                // 'created_by' => auth()->user()->id,
            ]);
            $this->kategori_store($request->kategori, $model->id);
            $this->tag_store($request->tag, $model->id);
            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'id' => ['required', 'int'],
                'nama' => ['required', 'string', 'max:255'],
                'slug' => ['required', 'string', 'max:255', 'unique:artikel,slug,' . $request->id],
                'detail' => ['required'],
                'date' => ['required'],
                'excerpt' => ['required'],
                'status' => ['required', 'int'],
            ]);
            DB::beginTransaction();
            $model = Artikel::find($request->id);
            $detail = Summernote::update($request->detail, $this->image_folder, $model->foto ?? '', substr($request->slug, 0, 10));

            $model->detail = $detail->html;
            $model->foto = $detail->first_img;
            $model->nama = $request->nama;
            $model->excerpt = $request->excerpt;
            $model->date = $request->date;
            $model->status = $request->status;
            // $model->updated_by = auth()->user()->id;

            $this->kategori_store($request->kategori, $model->id);
            $this->tag_store($request->tag, $model->id);
            $model->save();
            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Artikel $artikel)
    {
        try {
            Summernote::delete($artikel->detail);
            $artikel->delete();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    private function kategori_store($kategori, int $artikel_id): bool
    {
        // jika tidak ada kategori
        if (!$kategori) return false;

        // delete all kategori item where artikel_id
        ArtikelKategori::where('artikel_id', '=', $artikel_id)->delete();

        // insert all kategori item where artikel_id
        $kategories = [];
        foreach ($kategori as  $k) {
            // cek kategori apakah kategori baru
            $id = ((int)$k) ? $k : $this->insert_kategori($k);
            $kategories[] = [
                'artikel_id' => $artikel_id,
                'kategori_id' => $id,
            ];
        }
        ArtikelKategori::insert($kategories);
        return true;
    }

    private function insert_kategori(string $nama): int
    {

        $kategori = Kategori::create([
            'nama' => $nama,
            'slug' => $this->createSlug($nama),
            'status' => 1,
        ]);
        return $kategori->id;
    }

    private function tag_store($tag, int $artikel_id): bool
    {
        // jika tidak ada tag
        if (!$tag) return false;

        // delete all tag item where artikel_id
        ArtikelTag::where('artikel_id', '=', $artikel_id)->delete();

        // insert all tag item where artikel_id
        $tages = [];
        foreach ($tag as  $k) {
            // cek tag apakah tag baru
            $id = ((int)$k) ? $k : $this->insert_tag($k);
            $tages[] = [
                'artikel_id' => $artikel_id,
                'tag_id' => $id,
            ];
        }
        ArtikelTag::insert($tages);
        return true;
    }

    private function insert_tag(string $nama): int
    {
        $tag = Tag::create([
            'nama' => $nama,
            'slug' => $this->createSlug($nama),
            'status' => 1,
        ]);
        return $tag->id;
    }

    private function createSlug($str, $delimiter = '-')
    {
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }
}
