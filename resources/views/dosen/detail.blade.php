
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Detail Dosen | Unila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content='Unila' />
    <meta name='author' content='unila' />
    <meta name='keywords' content='Unila'>
    <link rel="apple-touch-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="shortcut icon" type="image/x-icon/png" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="stylesheet" href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/prettify.css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://codeseven.github.io/toastr/toastr.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="https://egov.phicos.co.id/lampung/unila/assets/css/style.css">
    <style type="text/css">
        .toolbar {
            position: absolute;
            right: 20px;
            top: 8px;
        }

        @media screen and (max-width: 600px) {
            .toolbar {
                position: unset;
                text-align: center;
            }
        }
    </style>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

</head>

<body data-sidebar="dark">

    <div id="layout-wrapper">
        <header id="page-topbar" class="shadow">
            <div class="navbar-header">
                <button class="btn btn-primary shadow fs-14" id="vertical-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-left p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block h-100">
                    <button type="button" class="btn header-item waves-effect h-100" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="https://egov.phicos.co.id/lampung/unila/assets/img/profil.png" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1 text-uppercase font-weight-bold text-dark" key="t-henry">Admin</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block text-dark"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item text-danger" onclick="logout()"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </header>
    </div><div class="vertical-menu">
    <button class="btn btn-primary shadow fs-14 d-lg-none d-flex position-absolute btn-close-sidebar">
        <i class="bx bx-x"></i>
    </button>
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <div class="d-flex">
                <div class="navbar-brand-box">
                    <a href="https://egov.phicos.co.id/lampung/unila/" target="_blank" class="d-flex flex-column justify-content-center align-items-center p-2 mb-2" style="background-color: white">
                        <div class="d-inline">
                            <img src="https://egov.phicos.co.id/lampung/unila/assets/img/logo-unila.png" class="img-fluid img-logo-large mb-2">
                            <img src="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png" class="img-fluid img-logo-small d-none" width="75">
                        </div>
                        <img src="https://egov.phicos.co.id/lampung/unila/assets/img/moto.png" class="img-fluid img-moto">
                        <!-- <div class="bg-white p-2" style="background-color: white;">
                        </div> -->
                        <!-- <p class="font-weight-bold fs-14 text-light d-inline-block mb-0">ONE DATA UNILA</p> -->
                    </a>
                </div>
            </div>
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('home') }}" class="waves-effect ">
                        <i class="bi bi-display m-0"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{  route('alumni') }}" class="waves-effect ">
                        <i class="bi bi-people m-0"></i>
                        <span>Alumni</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mahasiswa') }}" class="waves-effect ">
                        <i class="bi bi-people m-0"></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dosen') }}" class="waves-effect active">
                        <i class='bi bi-person-badge-fill'></i>
                        <span>Dosen</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"><div class="container">
            @if (session('message'))
            <div class="alert alert-success">
            {{ session('message') }}
            </div>
        @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dosen.update', $dosen_profile->id) }}" method="post">
                @csrf
                <h3 class="text-primary"><strong><u>Profil Dosen</u></strong></h3>
                <div class="d-flex mb-3 justify-content-end">
                    <div class="me-auto p-2">
                    </div>
                    <div class="p-2">
                        <button type="submit" id="btn-edit-profil" class="btn btn-primary">Edit Profil</button>
                        <button type="submit" id="btn-selesai" class="btn btn-success d-none">Selesai</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <img src="{{ $fileUrl }}" alt="" class="img-thumbnail">
                        <br>
                        <!-- Contoh tombol yang memicu modal -->
                        <button type="button" class="btn btn-primary btn-open-modal w-100" data-id="{{ $dosen_profile->id }}">Ganti Foto</button>

                    </div>
                    <div class="col-9">
                            <input type="hidden" name="id" id="id">
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Nama Lengkap</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->nama_dosen }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="{{ $dosen_profile->nama_dosen }}" > </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>NIP</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->nip_dosen }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="text" class="form-control" name="nip_dosen" id="nip_dosen" value="{{ $dosen_profile->nip_dosen }}"> </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Tempat, tgl. Lahir</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->ttl_dosen }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="ttl_dosen" class="form-control" name="ttl_dosen" id="ttl_dosen" value="{{ $dosen_profile->ttl_dosen }}" > </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Program Studi</strong></div>
                                <div class="col-md-8 label_dosen">: @if ($dosen_profile->pendidikan_dosen)
                                    {{ $dosen_profile->id_prodi }}
                                @endif
                                </div>
                                <div hidden class="col-md-8 dosen_editor"><input type="prodi" class="form-control" name="prodi" id="prodi" value="@if($dosen_profile->pendidikan_dosen){{$dosen_profile->id_prodi}}@endif"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Email</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->email_dosen }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="email_dosen" class="form-control" name="email_dosen" id="email_dosen" value="@if($dosen_profile){{$dosen_profile->email_dosen}}@endif" > </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Website</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->website_dosen }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="website_dosen" class="form-control" name="website_dosen" id="website_dosen" value="@if($dosen_profile){{$dosen_profile->website_dosen}}@endif" > </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Keahlian</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->keahlian }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="keahlian" class="form-control" name="keahlian" id="keahlian" value="@if($dosen_profile->pendidikan_dosen){{$dosen_profile->keahlian}}@endif" > </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4"><strong>Judul Desertasi</strong></div>
                                <div class="col-md-8 label_dosen">: {{ $dosen_profile->judul_desertasi }}</div>
                                <div hidden class="col-md-8 dosen_editor"><input type="judul_desertasi" class="form-control" name="judul_desertasi" id="judul_desertasi" value="@if($dosen_profile){{$dosen_profile->judul_desertasi}}@endif"> </div>
                            </div>
                    </div>
                </div>
            </form>

            <hr>
            <div id="content_dosen">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-pendidikan-tab" data-toggle="pill" href="#pills-pendidikan" role="tab" aria-controls="pills-pendidikan" aria-selected="true">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Penelitian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pengabdian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Penghargaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-karya_ilmiah-tab" data-toggle="pill" href="#pills-karya_ilmiah" role="tab" aria-controls="pills-karya_ilmiah" aria-selected="false">Karya Ilmiah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-kegiatan" role="tab" aria-controls="pills-kegiatan" aria-selected="false">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-jurnal" role="tab" aria-controls="pills-jurnal" aria-selected="false">Jurnal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-buku" role="tab" aria-controls="pills-buku" aria-selected="false">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-jabatan" role="tab" aria-controls="pills-jabatan" aria-selected="false">Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-organisasi" role="tab" aria-controls="pills-organisasi" aria-selected="false">Organisasi</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <!-- Pendidikan Tab Start Here -->
                    <div class="tab-pane fade show active" id="pills-pendidikan" role="tabpanel" aria-labelledby="pills-pendidikan-tab">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success mb-3 open-btn-modal-pendidikan" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-pendidikan" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Universitas</th>
                                        <th>Fakultas</th>
                                        <th>Prodi</th>
                                        <th>Jenjang</th>
                                        <th>Tahun Lulus</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($dosen_pendidikan as $row)
                                <tr>
                                    <th>{{ $no++ }}.</th>
                                    <td>{{ $row->universitas }}</td>
                                    <td>{{ $row->fakultas }}</td>
                                    <td>{{ $row->prodi }}</td>
                                    <td>{{ $row->jenjang }}</td>
                                    <td>{{ $row->tahun_lulus }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-primary  open-btn-modal-pendidikan-edit" data-id="{{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            @if ($row)
                                                <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('delete.details.dosen', ['id' => $row->id]) }}')">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pendidikan Tab End Here -->

                    <!-- Penelitian Tab Start Here -->
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_penelitian" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-penelitian" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Jabatan</th>
                                        <th>Tahun</th>
                                        <th>Sumber Dana</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dosen_penelitian as $penelitian)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $penelitian->judul_penelitian }}</td>
                                            <td>{{ $penelitian->jabatan }}</td>
                                            <td>{{ $penelitian->tahun }}</td>
                                            <td>{{ $penelitian->sumber_dana }}</td>
                                            <td>{{ $penelitian->kategori }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="submit" class="btn btn-primary  open-btn-modal-pendidikan-edit" data-id="{{ $penelitian->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    @if ($penelitian)
                                                        <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('delete.details.dosen.penelitian', ['id' => $penelitian->id]) }}')">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </button>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Penelitian Tab End Here -->

                    <!-- Tab Pengabdian Start Here -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_pengabdian" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-pengabdian" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Jabatan</th>
                                        <th>Tahun</th>
                                        <th>Sumber Dana</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Pengabdian End Here -->

                    <!-- Tab Penghargaan Start Here -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_penghargaan" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-penghargaan" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Penghargaan</th>
                                        <th>Tahun</th>
                                        <th>Institusi</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Penghargaan End Here -->

                    <!-- Tab Kara Ilmiah Start Here -->
                    <div class="tab-pane fade" id="pills-karya_ilmiah" role="tabpanel" aria-labelledby="pills-karya_ilmiah-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_karya_ilmiah" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-karya_ilmiah" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Tahun</th>
                                        <th>Jenis</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Kara Ilmiah End Here -->

                    <!-- Tab Kegiatan Start Here -->
                    <div class="tab-pane fade" id="pills-kegiatan" role="tabpanel" aria-labelledby="pills-kegiatan-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_kegiatan" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-kegiatan" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kegiatan</th>
                                        <th>Tahun</th>
                                        <th>Peranan</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Kegiatan End Here -->

                    <!-- Tab Jurnal Start Here -->
                    <div class="tab-pane fade" id="pills-jurnal" role="tabpanel" aria-labelledby="pills-jurnal-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_jurnal" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-jurnal" style="width: 100%;">
                                <thead class="text-center">
                                    <tr>
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Judul</th>
                                        <th colspan="5">Dimuat dalam Jurnal</th>
                                    </tr>
                                    <tr>
                                        <th>Nama Jurnal</th>
                                        <th>Tahun</th>
                                        <th>Volume</th>
                                        <th>No. Registrasi</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Jurnal End Here -->

                    <!-- Tab Buku Start Here -->
                    <div class="tab-pane fade" id="pills-buku" role="tabpanel" aria-labelledby="pills-buku-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_buku" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-buku" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Buku</th>
                                        <th>Tahun</th>
                                        <th>ISBN</th>
                                        <th>Penerbit</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Buku End Here -->

                    <!-- Tab Jabatan Start Here -->
                    <div class="tab-pane fade" id="pills-jabatan" role="tabpanel" aria-labelledby="pills-jabatan-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_jabatan" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-jabatan" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Jabatan</th>
                                        <th>Institusi</th>
                                        <th>Tahun</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Jabatan End Here -->

                    <!-- Tab Organisasi Start Here -->
                    <div class="tab-pane fade" id="pills-organisasi" role="tabpanel" aria-labelledby="pills-organisasi-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_organisasi" class="btn btn-success mb-3 ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-organisasi" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Organisasi</th>
                                        <th>Institusi</th>
                                        <th>Tahun</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody> </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Organisasi End Here -->

                    <!-- Modal -->
                    <div class="modal fade" id="modal-popout" role="dialog" style="z-index: 999999;">
                        <div class="modal-dialog modal-dialog-popout modal-xl">
                            <div class="modal-content">
                                <div id="modal_content"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div></div>
<footer class="footer">
	<div class="container-fluid">
		<div class="row text-custom" style="font-weight: 400;">
			<div class="col-sm-12">
				© <script>
					document.write(new Date().getFullYear())
				</script> Universitas Lampung
			</div>
		</div>
	</div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/jquery/jquery.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/simplebar/simplebar.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/node-waves/waves.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/jszip/jszip.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/prettify.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/js/pages/form-wizard.init.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/js/app.js"></script>
<script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/select2/js/select2.min.js"></script>
<script src="https://codeseven.github.io/toastr/toastr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
<script>
	// Navbar sticky onscroll
	const topbar = document.getElementById('page-topbar');
	window.onscroll = () => {
		if (window.scrollY > 45) {
			topbar.classList.add('sticky');
		} else {
			topbar.classList.remove('sticky');
		}
	};
	// Close Sidebar
	$('.btn-close-sidebar').click(() => {
		$('body').removeClass('sidebar-enable');
	});
</script>
<script type="text/javascript">
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"progressBar": true,
		"preventDuplicates": false,
		"positionClass": "toast-top-right",
		"onclick": null,
		"showDuration": "400",
		"hideDuration": "1000",
		"timeOut": "2500",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
	}
	$(document).ready(function() {
		$('.example').DataTable({
			language: {
				search: '<span>Cari:</span> _INPUT_',
				searchPlaceholder: 'Masukan pencarian...',
				infoEmpty: "Menampilkan 0 data",
				zeroRecords: "Tidak ada data",
				info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
				infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
				lengthMenu: 'Tampilkan: _MENU_',
				paginate: {
					'first': 'First',
					'last': 'Last',
					'next': '&rarr;',
					'previous': '&larr;'
				}
			}
		});
	});

	function logout() {
		Swal.fire({
			title: "Keluar dari Sistem?",
			text: "Anda akan logout dari sistem ini.",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#ea1c18",
			confirmButtonText: "Ya",
			cancelButtonText: "Batal",
			closeOnConfirm: false,
			closeOnCancel: true
		}).then((result) => {
			if (result.value) {
				window.location.href = 'login/logout';
			}
		});
	}

    var table = {};
    $(document).ready(function() {
        table.formPendidikan = $('#table-pendidikan').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formPenelitian = $('#table-penelitian').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formPengabdian = $('#table-pengabdian').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formPenghargaan = $('#table-penghargaan').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formKaryaIlmiah = $('#table-karya_ilmiah').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formkegiatan = $('#table-kegiatan').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formJurnal = $('#table-jurnal').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formBuku = $('#table-buku').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
        table.formOrganisasi = $('#table-organisasi').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Penelitian",
                info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                lengthMenu: 'Tampilkan: _MENU_',
                paginate: {
                    'first': 'First',
                    'last': 'Last',
                    'next': '&rarr;',
                    'previous': '&larr;'
                }
            },
        });
    });



    $(document).ready(function() {

        var id = $('#id').val()
        // detail_dosen();

        $('#btn-edit-profil').click(function(e) {
            e.preventDefault();

            $('.dosen_editor').removeAttr('hidden');
            $('.label_dosen').attr('hidden', 'hidden');
            $('#btn-selesai').removeClass('d-none')
            $('#btn-edit-profil').hide();

        });
    })

    $(document).ready(function() {
    $('.btn-open-modal').click(function() {
        var id = $(this).data('id');

        $.ajax({
            url: '/get-modal-content/' + id,
            type: 'GET',
            success: function(response) {
                $('#modal_content').html(response);
                $('#modal-popout').modal('show');
            }
        });
    });
});
    $('.open-btn-modal-pendidikan').click(function() {
    var id = $(this).data('id'); // Get the id from the button's data-id attribute
    var url = '/dosen/' + id + '/pendidikan'; // Build the URL with the id parameter
    $.ajax({
        url: url,
        type: 'GET',
        success: function(response) {
            $('#modal_content').html(response);
            $('#modal-popout').modal('show');
        }
    });
});

$('.open-btn-modal-pendidikan-edit').click(function() {
    var id = $(this).data('id');
    var url = '/dosen/edit/' + id + '/pendidikan';
    $.ajax({
        url: url,
        type: 'GET',
        success: function(response) {
            $('#modal_content').html(response);
            $('#modal-popout').modal('show');
        }
    });
});





function DeleteDetails(url) {
    Swal.fire({
            title: 'Are you sure?',
            text: "Data tidak akan bisa dikembalikan !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
}


</script>


</body>

</html>
