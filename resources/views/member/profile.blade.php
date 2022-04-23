@extends('templates.admin.master')

@section('content')
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-4">
            {{-- profile basic --}}
            <div class="card">
                <div class="card-body">
                    <form action="" id="basic_profile">
                        {{-- Poto profile --}}
                        <div class="text-center chat-image mb-5">
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <input type="file" hidden="" id="profile" name="profile" accept="image/*">
                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                <img alt="avatar" onclick="{$('#profile').trigger('click')}"
                                    onerror="this.src='{{ asset('assets/templates/admin/main/assets/images/profile.png') }}';this.onerror='';"
                                    src="{{ asset('assets/pengurus/profile/' . $user->foto) }}" class="brround"
                                    id="img_profile"
                                    style="height: 80px; width: 80px; object-fit: cover; object-position: center; border-radius: 50%;">

                                <label for="profile"><span class="badge rounded-pill avatar-icons bg-primary"><i
                                            class="fe fe-edit fs-12"></i></span></label>
                            </div>
                            <div class="text-center">
                                <h5 class="mb-1 text-dark fw-semibold">{{ $user->name }}</h5>
                                @if ($user->username)
                                    <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ '@' . $user->username }}</p>
                                @endif
                            </div>
                        </div>

                        {{-- angkatan --}}
                        <div class="text-left mt-3">
                            <h5 class="mb-1 text-dark fw-semibold">Angkatan:</h5>
                            <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ $user->angkatan }}</p>
                        </div>

                        {{-- riwayat kepengurusan --}}
                        @if ($kepengurusan)
                            <div class="text-left mt-3">
                                <h5 class="mb-1 text-dark fw-semibold">Riwayat Kepengurusan:</h5>
                                @foreach ($kepengurusan as $p)
                                    <p class="text-muted mt-0 mb-0 pt-0 fs-13">{{ $p['jabatan'] }}</p>
                                @endforeach
                            </div>
                        @endif
                        <hr>

                        {{-- form profile --}}
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki" {{ $user->gender == 'laki-laki' ? 'selected' : '' }}>Laki-Laki
                                </option>
                                <option value="perempuan" {{ $user->gender == 'perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tentang Saya</label>
                            <textarea class="form-control" rows="6" name="bio" id="bio"
                                placeholder="My bio.........">{{ $user->bio }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="profesi">Profesi</label>
                            <select class="form-control select2" id="profesi" name="profesi" style="width: 100%">
                                @if ($user->profesi)
                                    <option value="{{ $user->profesi }}" selected>{{ $user->profesi }}</option>
                                @endif
                            </select>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" form="basic_profile" class="btn btn-success my-1">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                </div>
            </div>

            {{-- profile address --}}
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Alamat</div>
                </div>
                <div class="card-body">
                    <form action="" id="address_profile">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="form-group">
                            <label for="province_id" class="me-md-2">Provinsi</label>
                            <select class="form-control" id="province_id" name="province_id" style="width: 100%">
                                @foreach ($provinces as $province)
                                    @if (($user->province_id ?? 32) == $province->id)
                                        <option value="{{ $province->id }}" selected>
                                            {{ $province->name }}
                                        </option>
                                    @else
                                        <option value="{{ $province->id }}">
                                            {{ $province->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="regency_id" class="me-md-2">Kabupaten/Kota</label>
                            <select class="form-control" id="regency_id" name="regency_id" style="width: 100%">
                                @if ($user->regency_id)
                                    <option value="{{ $user->regency_id }}">{{ $user->regencie }}</option>
                                @else
                                    <option value="3203">KABUPATEN CIANJUR</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district_id" class="me-md-2">Kecamatan</label>
                            <select class="form-control" id="district_id" name="district_id" style="width: 100%">
                                @if ($user->district_id)
                                    <option value="{{ $user->district_id }}">{{ $user->district }}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="village_id" class="me-md-2">Desa/Kelurahan</label>
                            <select class="form-control" id="village_id" name="village_id" style="width: 100%">
                                @if ($user->village_id)
                                    <option value="{{ $user->village_id }}">{{ $user->village }}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="alamat_lengkap">Alamat Lengkap</label>
                            <textarea class="form-control" rows="3" name="alamat_lengkap" id="alamat_lengkap"
                                placeholder="Nama jalan, Rt/Rw, Patokan, Nomor Rumah Dan lain lain.">{{ $user->alamat_lengkap }}</textarea>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" form="address_profile" class="btn btn-success my-1">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            {{-- Edit Profile --}}
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profile</h3>
                </div>
                <div class="card-body">
                    <form action="" id="detail_profile">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap"
                                value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Nama Profile</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Ex: iseplutpinur"
                                    value="{{ $user->username }}">
                                <input type="hidden" id="username_slug" name="username">
                            </div>
                            <small id="username_preview">{{ env('APP_URL') . '/' . $user->username }}</small>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                title="Tanggal Lahir" value="{{ $user->date_of_birth }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"
                                value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telepon">Nomor Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon"
                                title="Nomor telepon yang bisa di hubungi" placeholder="Nomor telepon"
                                value="{{ $user->telepon }}">
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text" id="whatsapp">+62</span>
                                <input type="number" class="form-control" id="basic-url" aria-describedby="whatsapp"
                                    name="whatsapp" title="Nomor Whatsapp" placeholder="85798132505"
                                    value="{{ $user->whatsapp }}">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" form="detail_profile" class="btn btn-success my-1">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                </div>
            </div>

            {{-- Other information --}}
            <div class="row">
                {{-- kontak --}}
                <div class="col-12">
                    <div class="card panel-theme">
                        <div class="card-header  d-flex flex-row justify-content-between">
                            <div class="float-start">
                                <h3 class="card-title">Kontak/Media Sosial</h3>
                            </div>
                            <button class="btn btn-info btn-sm" data-bs-effect="effect-scale" data-bs-toggle="modal"
                                href="#modal-kontak" onclick="kontakAdd()" data-target="#modal-kontak"><i
                                    class="fa fa-plus me-2"></i>Tambah</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush" id="kontak-body">

                            </div>
                        </div>
                    </div>
                </div>

                {{-- Riwayat Pendidikan --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex flex-row justify-content-between">
                            <div class="card-title">Riwayat Pendidikan</div>
                            <button class="btn btn-info btn-sm" data-bs-effect="effect-scale" data-bs-toggle="modal"
                                href="#modal-pendidikan" onclick="pendidikanAdd()" data-target="#modal-pendidikan"><i
                                    class="fa fa-plus me-2"></i>Tambah</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush" id="pendidikan-body"> </div>
                        </div>
                    </div>
                </div>

                {{-- Pengalaman Organisasi --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex flex-row justify-content-between">
                            <div class="card-title">Pengalaman Organisasi</div>
                            <button class="btn btn-info btn-sm" data-bs-effect="effect-scale" data-bs-toggle="modal"
                                href="#modal-pengalaman_organisasi" onclick="pengalaman_organisasiAdd()"
                                data-target="#modal-pengalaman_organisasi"><i class="fa fa-plus me-2"></i>Tambah</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush" id="pengalaman_organisasi-body"> </div>
                        </div>
                    </div>
                </div>

                {{-- Pengalaman Lain --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex flex-row justify-content-between">
                            <div class="card-title">Pengalaman Lain</div>
                            <button class="btn btn-info btn-sm" data-bs-effect="effect-scale" data-bs-toggle="modal"
                                href="#modal-pengalaman_lain" onclick="pengalaman_lainAdd()"
                                data-target="#modal-pengalaman_lain"><i class="fa fa-plus me-2"></i>Tambah</button>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush" id="pengalaman_lain-body"> </div>
                        </div>
                    </div>
                </div>

                {{-- Hobi --}}
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header  d-flex flex-row justify-content-between">
                            <div class="float-start">
                                <h3 class="card-title">Hobi</h3>
                            </div>
                            <button type="submit" form="hobi_form" class="btn btn-info btn-sm">
                                <li class="fa fa-save mr-1"></li> Save changes
                            </button>
                        </div>
                        <div class="card-body">
                            <form action="" id="hobi_form">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <select class="form-control" style="width: 100%;" required="" id="hobbies" multiple
                                    name="hobbies[]">
                                    @foreach ($hobbies as $hobby)
                                        <option value="{{ $hobby->name }}" selected>{{ $hobby->name }}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSED -->

    {{-- modal --}}
    {{-- modal kontak --}}
    <div class="modal fade" id="modal-kontak">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-kontak-title"></h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="kontak_form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="id" id="kontak_id">
                        <div class="form-group">
                            <label class="form-label" for="kontak_tipe">Kontak Jenis/Tipe</label>
                            <select class="form-control" style="width: 100%;" required="" id="kontak_tipe" name="tipe">
                                @foreach ($kontak_tipe as $kontak)
                                    <option value="{{ $kontak->id }}">{{ $kontak->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="kontak">Kontak <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="kontak" name="kontak"
                                placeholder="Ex: https://facebook.com/iseplutpinur7" required="" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="kontak_form">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal pendidikan --}}
    <div class="modal fade" id="modal-pendidikan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-pendidikan-title"></h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <form action="javascript:void(0)" id="pendidikan_form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="id" id="pendidikan_id">
                        <div class="form-group">
                            <label class="form-label" for="pendidikan_jenis">Pendidikan Jenis/Tipe</label>
                            <select class="form-control" style="width: 100%;" required="" id="pendidikan_jenis"
                                name="jenis">
                                @foreach ($pendidikan_jenis as $pendidikan)
                                    <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pendidikan">Instansi <span
                                    class="text-danger">*</span></label>
                            <select style="width: 100%;" class="form-control" id="pendidikan" name="pendidikan"
                                placeholder="Nama Tempat belajar, Sekolah DLL" required="">
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="pendidikan_dari">Dari <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="pendidikan_dari" name="dari"
                                        placeholder="Tahun Masuk" required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="pendidikan_sampai">Sampai</label>
                                    <input type="number" class="form-control" id="pendidikan_sampai" name="sampai"
                                        placeholder="Tahun Keluar" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pendidikan_jurusan">Jurusan </label>
                            <input type="text" class="form-control" id="pendidikan_jurusan" name="jurusan"
                                placeholder="Jika tidak ada bisa di kosongkan." />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pendidikan_keterangan">Keterangan/Lainnya </label>
                            <input type="text" class="form-control" id="pendidikan_keterangan" name="keterangan"
                                placeholder="Contoh nama, kode, kelas DLL" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="pendidikan_form">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal pengalaman_organisasi --}}
    <div class="modal fade" id="modal-pengalaman_organisasi">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-pengalaman_organisasi-title"></h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <form action="javascript:void(0)" id="pengalaman_organisasi_form" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="id" id="pengalaman_organisasi_id">
                        <div class="form-group">
                            <label class="form-label" for="pengalaman_organisasi_nama">Nama Organisasi<span
                                    class="text-danger">*</span></label>
                            <select style="width: 100%;" class="form-control" id="pengalaman_organisasi_nama" name="nama"
                                placeholder="Nama Organisasi" required="">
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="pengalaman_organisasi_dari">Dari <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="pengalaman_organisasi_dari" name="dari"
                                        placeholder="Tahun Dari" required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="pengalaman_organisasi_sampai">Sampai</label>
                                    <input type="number" class="form-control" id="pengalaman_organisasi_sampai"
                                        name="sampai" placeholder="Tahun Sampai" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pengalaman_organisasi_jabatan">Jabatan <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="pengalaman_organisasi_jabatan" name="jabatan"
                                placeholder="Nama jabatan" required="" />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pengalaman_organisasi_keterangan">Keterangan/Lainnya
                            </label>
                            <input type="text" class="form-control" id="pengalaman_organisasi_keterangan"
                                name="keterangan" placeholder="Keterangan" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="pengalaman_organisasi_form">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal pengalaman_lain --}}
    <div class="modal fade" id="modal-pengalaman_lain">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-pengalaman_lain-title"></h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <form action="javascript:void(0)" id="pengalaman_lain_form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="id" id="pengalaman_lain_id">
                        <div class="form-group">
                            <label class="form-label" for="pengalaman_lain_pengalaman">Pengalaman <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" rows="6" name="pengalaman" id="pengalaman_lain_pengalaman" placeholder=""
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="pengalaman_lain_keterangan">Keterangan/Lainnya
                            </label>
                            <input type="text" class="form-control" id="pengalaman_lain_keterangan" name="keterangan"
                                placeholder="Keterangan" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="pengalaman_lain_form">
                        <li class="fa fa-save mr-1"></li> Save changes
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="bi bi-x-lg"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('assets/templates/admin/plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/templates/admin/plugins/loading/loadingoverlay.min.js') }}"></script>
    <script>
        function showPreview(event, image_id) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById(image_id);
                preview.src = src;
            }
        }

        $(document).ready(() => {
            // select 2 =====================================================================================
            $('#profesi').select2({
                ajax: {
                    url: "{{ route('member.profile.profesi_select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    }
                }
            });

            $('#province_id').select2();

            // initial
            $('#regency_id').select2({
                ajax: {
                    url: "{{ route('admin.address.regencie.select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                            province_id: $('#province_id').val()
                        }
                        return query;
                    }
                }
            });

            $('#district_id').select2({
                ajax: {
                    url: "{{ route('admin.address.district.select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                            regency_id: $('#regency_id').val()
                        }
                        return query;
                    }
                }
            });

            $('#village_id').select2({
                ajax: {
                    url: "{{ route('admin.address.village.select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                            district_id: $('#district_id').val()
                        }
                        return query;
                    }
                }
            });


            // clear child
            $('#province_id').on('select2:select', function(e) {
                clearRegency();
                clearDistrict();
                clearVillage();
            });

            $('#regency_id').on('select2:select', function(e) {
                clearDistrict();
                clearVillage();
            });

            $('#district_id').on('select2:select', function(e) {
                clearVillage();
            });

            // Crud
            $('#kontak_tipe').select2({
                dropdownParent: $('#modal-kontak')
            });

            $('#pendidikan_jenis').select2({
                dropdownParent: $('#modal-pendidikan')
            });

            $('#pendidikan').select2({
                ajax: {
                    url: "{{ route('member.profile.pendidikan_select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                            pendidikan_jenis_id: $('#pendidikan_jenis').val()
                        }
                        return query;
                    }
                },
                dropdownParent: $('#modal-pendidikan')
            });

            $('#pengalaman_organisasi_nama').select2({
                ajax: {
                    url: "{{ route('member.profile.pengalaman_organisasi_select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    }
                },
                dropdownParent: $('#modal-pengalaman_organisasi')
            });

            $('#hobbies').select2({
                ajax: {
                    url: "{{ route('member.profile.hobby_select2') }}",
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: function(params) {
                        var query = {
                            search: params.term,
                        }
                        return query;
                    }
                }
            });

            // ==============================================================================================
            $("#username").keyup(function() {
                var Text = $(this).val();
                var result = Text.toLowerCase()
                    .replace(/[^\w ]+/g, '')
                    .replace(/ +/g, '-');

                $('#username_preview').html(`{{ env('APP_URL') }}/${result}`);
                $('#username_slug').val(result);
            });

            // insertForm ===================================================================================
            // Basic Profile
            $('#basic_profile').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=basic_profile]', 'Save Changes');
                const route = "{{ route('member.profile.save_basic') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#header_foto_profile').attr('src', ($('#img_profile').attr('src')));
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=basic_profile]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            // Address Profile
            $('#address_profile').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=address_profile]', 'Save Changes');
                const route = "{{ route('member.profile.save_address') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#header_foto_profile').attr('src', ($('#img_profile').attr('src')));
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=address_profile]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            // Detail Profile
            $('#detail_profile').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=detail_profile]', 'Save Changes');
                const route = "{{ route('member.profile.save_detail') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#header_foto_profile').attr('src', ($('#img_profile').attr('src')));
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=detail_profile]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            $("body").on("change", "#profile", function(e) {
                var file = e.target.files[0];
                var mediabase64data;
                getBase64(file).then(
                    mediabase64data => $('#img_profile').attr('src', mediabase64data)
                );
            });

            // kontak insert/update
            $('#kontak_form').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=kontak_form]', 'Save Changes');
                const route = ($('#kontak_id').val() == '') ?
                    "{{ route('member.profile.kontak_insert') }}" :
                    "{{ route('member.profile.kontak_update') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-kontak").modal('hide');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        kontakRender();
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=kontak_form]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            // hobbies save
            $('#hobi_form').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=hobi_form]', 'Save Changes');
                const route = "{{ route('member.profile.hobby_save') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $('#header_foto_profile').attr('src', ($('#img_profile').attr('src')));
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=hobi_form]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            // pendidikan insert/update
            $('#pendidikan_form').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=pendidikan_form]', 'Save Changes');
                const route = ($('#pendidikan_id').val() == '') ?
                    "{{ route('member.profile.pendidikan_insert') }}" :
                    "{{ route('member.profile.pendidikan_update') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-pendidikan").modal('hide');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        pendidikanRender();
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=pendidikan_form]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            // pengalaman_organisasi insert/update
            $('#pengalaman_organisasi_form').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=pengalaman_organisasi_form]', 'Save Changes');
                const route = ($('#pengalaman_organisasi_id').val() == '') ?
                    "{{ route('member.profile.pengalaman_organisasi_insert') }}" :
                    "{{ route('member.profile.pengalaman_organisasi_update') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-pengalaman_organisasi").modal('hide');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        pengalaman_organisasiRender();
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=pengalaman_organisasi_form]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

            // pengalaman_lain insert/update
            $('#pengalaman_lain_form').submit(function(e) {
                e.preventDefault();
                resetErrorAfterInput();
                var formData = new FormData(this);
                setBtnLoading('button[type=submit][form=pengalaman_lain_form]', 'Save Changes');
                const route = ($('#pengalaman_lain_id').val() == '') ?
                    "{{ route('member.profile.pengalaman_lain_insert') }}" :
                    "{{ route('member.profile.pengalaman_lain_update') }}";
                $.ajax({
                    type: "POST",
                    url: route,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modal-pengalaman_lain").modal('hide');
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Data saved successfully',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        pengalaman_lainRender();
                    },
                    error: function(data) {
                        const res = data.responseJSON ?? {};
                        errorAfterInput = [];
                        for (const property in res.errors) {
                            errorAfterInput.push(property);
                            setErrorAfterInput(res.errors[property], `#${property}`);
                        }
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: res.message ?? 'Something went wrong',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },
                    complete: function() {
                        setBtnLoading('button[type=submit][form=pengalaman_lain_form]',
                            '<li class="fa fa-save mr-1"></li> Save changes',
                            false);
                    }
                });
            });

        })

        function getBase64(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => resolve(reader.result);
                reader.onerror = error => reject(error);
            });
        }

        function clearRegency() {
            $('#regency_id')
                .append((new Option('', '', true, true)))
                .trigger('change');
        }

        function clearDistrict() {
            $('#district_id')
                .append((new Option('', '', true, true)))
                .trigger('change');
        }

        function clearVillage() {
            $('#village_id')
                .append((new Option('', '', true, true)))
                .trigger('change');
        }

        function isValidURL(string) {
            // https://stackoverflow.com/questions/5717093/check-if-a-javascript-string-is-a-url | Vikasdeep Singh
            var res = string.match(
                /(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
            return (res !== null)
        };

        // Kontak =================================================================================
        function kontakAdd() {
            $('#modal-kontak-title').html('Tambah Kontak');
            $('#kontak_form').trigger("reset");
            $('#kontak_id').val('');
        }

        function kontakEdit(datas) {
            const data = datas.dataset;
            $('#modal-kontak-title').html("Edit Kontak");
            $('#modal-kontak').modal('show');
            $('#kontak_form').trigger("reset");
            $('#kontak_id').val(data.id);
            $('#kontak').val(data.kontak);
            $('#kontak_tipe').val(data.kontak_tipe_id).trigger('change');;
        }

        function kontakDelete(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to proceed ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url('member/profile/kontak_delete') }}/${id}`,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Please Wait..!',
                                text: 'Is working..',
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Kontak deleted successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            kontakRender();
                        },
                        complete: function() {
                            swal.hideLoading();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal.hideLoading();
                            swal.fire("!Opps ", "Something went wrong, try again later", "error");
                        }
                    });
                }
            });
        }

        function kontakRender() {
            const kontak_body = $('#kontak-body');
            kontak_body.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: "{{ route('member.profile.kontak') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: '{{ $user->id }}'
                },
                success: (data) => {
                    kontak_body.html('');
                    data.datas.forEach(e => {
                        const value = isValidURL(e.value) ?
                            `<a href="${e.value}" class="link-primary">${e.value}</a>` :
                            `<p class="mb-1">${e.value}</p>`;
                        kontak_body.append(`
                        <div class="list-group-item list-group-item-action d-md-flex flex-row justify-content-between">
                                <div>
                                    <div class="d-flex w-100">
                                        <i class="${e.icon} me-3"></i>
                                        <h5 class="mb-1">${e.kontak}</h5>
                                    </div>
                                    ${value}
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-sm"
                                        data-kontak="${e.value}"
                                        data-id="${e.id}"
                                        data-kontak_tipe_id="${e.kontak_id}"
                                        onclick="kontakEdit(this)">
                                        <i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-sm"
                                    onclick="kontakDelete('${e.id}')"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        `);
                    });
                },
                error: function(data) {
                    const res = data.responseJSON ?? {};
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res.message ?? 'Something went wrong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                complete: function() {
                    kontak_body.LoadingOverlay("hide");
                }
            });
        }

        // pendidikan =================================================================================
        function pendidikanAdd() {
            $('#modal-pendidikan-title').html('Tambah Pendidikan');
            $('#pendidikan_form').trigger("reset");
            $('#pendidikan_id').val('');
        }

        function pendidikanEdit(datas) {
            const data = datas.dataset;
            $('#modal-pendidikan-title').html("Edit Kontak");
            $('#modal-pendidikan').modal('show');
            $('#pendidikan_form').trigger("reset");
            $('#pendidikan_id').val(data.id);
            $('#pendidikan').val(data.instansi);
            $('#pendidikan_dari').val(data.dari);
            $('#pendidikan_sampai').val(data.sampai);
            $('#pendidikan_jurusan').val(data.jurusan);
            $('#pendidikan_keterangan').val(data.keterangan);
            $('#pendidikan_jenis').val(data.pendidikan_jenis_id).trigger('change');
        }

        function pendidikanDelete(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to proceed ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url('member/profile/pendidikan_delete') }}/${id}`,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Please Wait..!',
                                text: 'Is working..',
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Kontak deleted successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            pendidikanRender();
                        },
                        complete: function() {
                            swal.hideLoading();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal.hideLoading();
                            swal.fire("!Opps ", "Something went wrong, try again later", "error");
                        }
                    });
                }
            });
        }

        function pendidikanRender() {
            const element = $('#pendidikan-body');
            element.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: "{{ route('member.profile.pendidikan') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: '{{ $user->id }}'
                },
                success: (data) => {
                    element.html('');
                    data.datas.forEach(e => {
                        const jurusan = e.jurusan ? `<p class="my-0">${e.jurusan}</p>` : '';
                        const keterangan = e.keterangan ? `<p class="my-0">${e.keterangan}</p>` : '';

                        element.append(`
                                <div class="list-group-item list-group-item-action d-md-flex flex-row justify-content-between">
                                    <div>
                                        <div class="d-flex w-100">
                                            <h5 class="mb-1 fw-bold">${e.pendidikan}</h5>
                                        </div>
                                        <p class="my-0">${e.dari}-${e.sampai ?? 'Sekarang'} | ${e.instansi}</p>
                                        ${jurusan}
                                        ${keterangan}
                                    </div>

                                    <div class="text-md-center">
                                        <button class="btn btn-primary btn-sm my-1"
                                            data-id="${e.id}"

                                            data-instansi="${e.instansi}"
                                            data-dari="${e.dari}"
                                            data-jurusan="${e.jurusan ?? ''}"
                                            data-sampai="${e.sampai ?? ''}"
                                            data-keterangan="${e.keterangan ?? ''}"
                                            data-pendidikan_jenis_id="${e.pendidikan_id}"
                                            onclick="pendidikanEdit(this)">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm my-1" onclick="pendidikanDelete('${e.id}')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                        `);
                    });
                },
                error: function(data) {
                    const res = data.responseJSON ?? {};
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res.message ?? 'Something went wrong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                complete: function() {
                    element.LoadingOverlay("hide");
                }
            });
        }

        // pengalaman_organisasi ==================================================================
        function pengalaman_organisasiAdd() {
            $('#modal-pengalaman_organisasi-title').html('Tambah Pengalaman Organisasi');
            $('#pengalaman_organisasi_form').trigger("reset");
            $('#pengalaman_organisasi_id').val('');
            $('#pengalaman_organisasi_nama').append((new Option('Nama Organisasi', '', true, true)))
                .trigger('change');
        }

        function pengalaman_organisasiEdit(datas) {
            const data = datas.dataset;
            $('#modal-pengalaman_organisasi-title').html("Edit Pengalaman Organisasi");
            $('#modal-pengalaman_organisasi').modal('show');
            $('#pengalaman_organisasi_form').trigger("reset");
            $('#pengalaman_organisasi_id').val(data.id);
            $('#pengalaman_organisasi_keterangan').val(data.keterangan);
            $('#pengalaman_organisasi_dari').val(data.dari);
            $('#pengalaman_organisasi_sampai').val(data.sampai);
            $('#pengalaman_organisasi_jabatan').val(data.jabatan);
            $('#pengalaman_organisasi_nama').append((new Option(data.nama, data.nama, true, true)))
                .trigger('change');
        }

        function pengalaman_organisasiDelete(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to proceed ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url('member/profile/pengalaman_organisasi_delete') }}/${id}`,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Please Wait..!',
                                text: 'Is working..',
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Kontak deleted successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            pengalaman_organisasiRender();
                        },
                        complete: function() {
                            swal.hideLoading();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal.hideLoading();
                            swal.fire("!Opps ", "Something went wrong, try again later", "error");
                        }
                    });
                }
            });
        }

        function pengalaman_organisasiRender() {
            const element = $('#pengalaman_organisasi-body');
            element.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: "{{ route('member.profile.pengalaman_organisasi') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: '{{ $user->id }}'
                },
                success: (data) => {
                    element.html('');
                    data.datas.forEach(e => {
                        const keterangan = e.keterangan ? `<p class="my-0">${e.keterangan}</p>` : '';

                        element.append(`
                                <div class="list-group-item list-group-item-action d-md-flex flex-row justify-content-between">
                                    <div>
                                        <div class="d-flex w-100">
                                            <h5 class="mb-1 fw-bold">${e.nama}</h5>
                                        </div>
                                        <p class="my-0">${e.dari}-${e.sampai ?? 'Sekarang'} | ${e.jabatan}</p>
                                        ${keterangan}
                                    </div>

                                    <div class="text-md-center">
                                        <button class="btn btn-primary btn-sm my-1"
                                            data-id="${e.id}"

                                            data-nama="${e.nama}"
                                            data-dari="${e.dari}"
                                            data-jabatan="${e.jabatan ?? ''}"
                                            data-sampai="${e.sampai ?? ''}"
                                            data-keterangan="${e.keterangan ?? ''}"
                                            onclick="pengalaman_organisasiEdit(this)">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm my-1" onclick="pengalaman_organisasiDelete('${e.id}')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                        `);
                    });
                },
                error: function(data) {
                    const res = data.responseJSON ?? {};
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res.message ?? 'Something went wrong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                complete: function() {
                    element.LoadingOverlay("hide");
                }
            });
        }


        // pengalaman_lain ==================================================================
        function pengalaman_lainAdd() {
            $('#modal-pengalaman_lain-title').html('Tambah Pengalaman Lain');
            $('#pengalaman_lain_form').trigger("reset");
            $('#pengalaman_lain_id').val('');
        }

        function pengalaman_lainEdit(datas) {
            const data = datas.dataset;
            $('#modal-pengalaman_lain-title').html("Edit Pengalaman Lain");
            $('#modal-pengalaman_lain').modal('show');
            $('#pengalaman_lain_form').trigger("reset");
            $('#pengalaman_lain_id').val(data.id);
            $('#pengalaman_lain_keterangan').val(data.keterangan);
            $('#pengalaman_lain_pengalaman').val(data.pengalaman);
        }

        function pengalaman_lainDelete(id) {
            swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to proceed ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes'
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: `{{ url('member/profile/pengalaman_lain_delete') }}/${id}`,
                        type: 'DELETE',
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Please Wait..!',
                                text: 'Is working..',
                                onOpen: function() {
                                    Swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Kontak deleted successfully',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            pengalaman_lainRender();
                        },
                        complete: function() {
                            swal.hideLoading();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal.hideLoading();
                            swal.fire("!Opps ", "Something went wrong, try again later", "error");
                        }
                    });
                }
            });
        }

        function pengalaman_lainRender() {
            const element = $('#pengalaman_lain-body');
            element.LoadingOverlay("show");
            $.ajax({
                type: "GET",
                url: "{{ route('member.profile.pengalaman_lain') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    user_id: '{{ $user->id }}'
                },
                success: (data) => {
                    element.html('');
                    data.datas.forEach(e => {
                        element.append(`
                                <div class="list-group-item list-group-item-action d-md-flex flex-row justify-content-between">
                                    <div>
                                        <p class="my-0">${e.pengalaman}</p>
                                    </div>

                                    <div class="text-md-center">
                                        <button class="btn btn-primary btn-sm my-1"
                                            data-id="${e.id}"

                                            data-pengalaman="${e.pengalaman}"
                                            data-keterangan="${e.keterangan ?? ''}"
                                            onclick="pengalaman_lainEdit(this)">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm my-1" onclick="pengalaman_lainDelete('${e.id}')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                        `);
                    });
                },
                error: function(data) {
                    const res = data.responseJSON ?? {};
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: res.message ?? 'Something went wrong',
                        showConfirmButton: false,
                        timer: 1500
                    })
                },
                complete: function() {
                    element.LoadingOverlay("hide");
                }
            });
        }

        // initial function
        kontakRender();
        pendidikanRender();
        pengalaman_organisasiRender();
        pengalaman_lainRender();
    </script>
@endsection
