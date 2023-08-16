
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <base href="https://egov.phicos.co.id/lampung/unila/">
    <title>Mahasiswa | Unila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content='Unila' />
    <meta name='author' content='unila' />
    <meta name='keywords' content='Unila'>
    <link rel="apple-touch-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="shortcut icon" type="image/x-icon/png" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <base href="https://egov.phicos.co.id/lampung/unila/">
    <link rel="stylesheet" href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/prettify.css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://codeseven.github.io/toastr/toastr.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

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
                    <a href="{{ route('alumni') }}" class="waves-effect ">
                        <i class="bi bi-people m-0"></i>
                        <span>Alumni</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mahasiswa') }}" class="waves-effect active">
                        <i class="bi bi-people m-0"></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="back/dosen" class="waves-effect ">
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
        <div class="container-fluid"><div class="page-body body-backg">
    <div class="content-body">
        <div class="col-xl-12 xl-100 col-lg-12 box-col-12">
            <div class="card glass">
                <div class="card-header py-3">
                    <h4 class="card-title mb-0 text-dark">Detail Mahasiswa</h4>
                    <div class="toolbar">
                        <a href="{{ route('mahasiswa') }}"><button type="button" class="btn btn-primary ">Kembali</button></a>
                    </div>
                </div>
                <div class="card-body">
                    <table width="100%">
                            <tr>
                                <td width="15%"><b>NPM</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->npm }}</td>
                                <td width="15%"><b>Kelas/Kelompok</b></td>
                                <td width="2%">:</td>
                                <td width="33%">Kelas1</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Nama Mahasiswa</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->nama_lengkap }}</td>
                                <td width="15%"><b>Jenis Pendaftaran</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->jenis_pendaftaran }}</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Program Studi</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->prodi }}</td>
                                <td width="15%"><b>Jalur Pendaftaran</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->jalur_pendaftaran }}</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Konsentrasi</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->jenis_pendaftaran }}</td>
                                <td width="15%"><b>Gelombang</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->gelombang }}</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Periode Masuk</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->periode_masuk }}</td>
                                <td width="15%"><b>Tanggal Masuk</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->tanggal_masuk }}</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Tahun Kurikulum</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->tahun_kurikulum }}</td>
                                <td width="15%"><b>Nomor Tes</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->nomor_tes }}</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Sistem Kuliah</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->sistem_kuliah }}</td>
                                <td width="15%"><b>Beasiswa</b></td>
                                <td width="2%">:</td>
                                <td width="33%">{{ $mahasiswa->beasiswa }}</td>
                            </tr>
                            <tr>
                                <td width="15%"><b>Status</b></td>
                                <td width="2%">:</td>
                                <td>{{ $mahasiswa->status }}</td>
                            </tr>
                    </table>
                    <hr>
                    <div class="tabbed-card">
                        <ul class="pull-right nav nav-tabs border-tab nav-primary" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="informasi-umum-tab" data-toggle="tab" href="#informasi-umum" role="tab" aria-controls="informasi-umum" aria-selected="false" data-original-title="" title="">Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" id="domisili-tab" data-toggle="tab" href="#domisili" role="tab" aria-controls="domisili" aria-selected="true" data-original-title="" title="">Domisili</a></li>
                            <li class="nav-item"><a class="nav-link" id="orang-tua-tab" data-toggle="tab" href="#orang-tua" role="tab" aria-controls="orang-tua" aria-selected="true" data-original-title="" title="">Orang Tua</a></li>
                            <li class="nav-item"><a class="nav-link" id="wali-tab" data-toggle="tab" href="#wali" role="tab" aria-controls="wali" aria-selected="true" data-original-title="" title="">Wali</a></li>
                            <li class="nav-item"><a class="nav-link" id="sekolah-tab" data-toggle="tab" href="#sekolah" role="tab" aria-controls="sekolah" aria-selected="true" data-original-title="" title="">Sekolah</a></li>
                            <li class="nav-item"><a class="nav-link" id="perguruan-tinggi-tab" data-toggle="tab" href="#perguruan-tinggi" role="tab" aria-controls="perguruan-tinggi" aria-selected="true" data-original-title="" title="">Perguruan Tinggi</a></li>
                        </ul><br>
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade active show" id="informasi-umum" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
                                <table width="100%">
                                    <tr>
                                        <td width="15%"><b>Jenis Kelamin</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->jenis_kelamin }}</td>
                                        <td width="15%"><b>Email Pribadi</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->email }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Tempat Lahir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->tempat_lahir }}</td>
                                        <td width="15%"><b>Status Nikah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->status_nikah }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Tanggal Lahir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->tanggal_lahir }}</td>
                                        <td width="15%"><b>NIK</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Agama</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->agama }}</td>
                                        <td width="15%"><b>No. KK</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->no_kk }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Suku</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->suku }}</td>
                                        <td width="15%"><b>No. KPS</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->no_kps }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Golongan Darah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->golongan_darah }}</td>
                                        <td width="15%"><b>Pekerjaan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Berat Badan(kg)</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->berat_badan }}</td>
                                        <td width="15%"><b>Penghasilan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->penghasilan }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Tinggi Badan(cm)</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->tinggi_badan }}</td>
                                        <td width="15%"><b>Instansi Pekerjaan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->instansi_pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>No. Telepon</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->no_telp }}</td>
                                        <td width="15%"><b>Transportasi</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->transport }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>No. HP</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->no_hp }}</td>
                                        <td width="15%"><b>Akta Kelahiran</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_umum->akta_kelahiran }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Email Kampus</b></td>
                                        <td width="2%">:</td>
                                        <td>{{ $mahasiswa_umum->email_kampus }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="domisili" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
                                <table width="100%">
                                    <tr>
                                        <td width="15%"><b>Alamat</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->alamat }}</td>
                                        <td width="15%"><b>Kota</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->kota }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>RT</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->rt }}</td>
                                        <td width="15%"><b>Kecamatan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>RW</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->rw }}</td>
                                        <td width="15%"><b>Kewarganegaraan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->kewarganegaraan }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Dusun</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->dusun }}</td>
                                        <td width="15%"><b>Kode Pos</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->kode_pos }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Desa/Kelurahan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->kelurahan }}</td>
                                        <td width="15%"><b>Status Tinggal</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_domisili->status_tinggal }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Propinsi</b></td>
                                        <td width="2%">:</td>
                                        <td>{{ $mahasiswa_domisili->propinsi }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="orang-tua" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                                <table width="100%">
                                    <tr>
                                        <td colspan="3"><h5 style="color: green;">Biodata Ayah</h5><hr width="90%"></td>
                                        <td colspan="3"><h5 style="color: green;">Biodata Ibu</h5><hr width="90%"></td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Nama Lengkap</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->nama_ayah }}</td>
                                        <td width="15%"><b>Nama Lengkap</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>NIK</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->nik_ayah }}</td>
                                        <td width="15%"><b>NIK</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->nik_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Tanggal Lahir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->tgl_lahir_ayah }}</td>
                                        <td width="15%"><b>Tanggal Lahir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->tgl_lahir_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Status Hidup</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->status_hidup_ayah }}</td>
                                        <td width="15%"><b>Status Hidup</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->status_hidup_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Status Kekerabatan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->status_kerabatan_ayah }}</td>
                                        <td width="15%"><b>Status Kekerabatan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->status_kerabatan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Pendidikan Terakhir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->pendidikan_ayah }}</td>
                                        <td width="15%"><b>Pendidikan Terakhir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->pendidikan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Pekerjaan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->pekerjaan_ayah }}</td>
                                        <td width="15%"><b>Pekerjaan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->pekerjaan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Penghasilan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->penghasilan_ayah }}</td>
                                        <td width="15%"><b>Penghasilan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->penghasilan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Alamat</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->alamat_ayah }}</td>
                                        <td width="15%"><b>Alamat</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->alamat_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>No. Telepon</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->no_telp_ayah }}</td>
                                        <td width="15%"><b>No. Telepon</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->no_telp_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Email</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->email_ayah }}</td>
                                        <td width="15%"><b>Email</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_ortu->email_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Aktivasi</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%"></td>
                                        <td width="15%"><b>Aktivasi</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                                <table width="100%">
                                    <tr>
                                        <td width="15%"><b>Nama Lengkap</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->nama_wali }}</td>
                                        <td width="15%"><b>Pekerjaan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->pekerjaan_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>NIK</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->nik_wali }}</td>
                                        <td width="15%"><b>Penghasilan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->pendidikan_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Tanggal Lahir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->tgl_lahir_wali }}</td>
                                        <td width="15%"><b>Alamat</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->alamat_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Status Hidup</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->status_hidup_wali }}</td>
                                        <td width="15%"><b>No. Telepon</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->no_telp_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Status Kekerabatan</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->status_kerabatan_wali }}</td>
                                        <td width="15%"><b>Email</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->email_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Pendidikan Terakhir</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_wali->pendidikan_wali }}</td>
                                        <td width="15%"><b>Aktivasi?</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="sekolah" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                                <table width="100%">
                                    <tr>
                                        <td width="15%"><b>Pendidikan Asal</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->pendidikan_asal }}</td>
                                        <td width="15%"><b>Alamat Sekolah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->alamat_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Propinsi Sekolah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->propinsi_sekolah }}</td>
                                        <td width="15%"><b>Telepon Sekolah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->telp_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Kota Sekolah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->kota_sekolah }}</td>
                                        <td width="15%"><b>No. Ijasah Sekolah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->nomor_ijasah_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Sekolah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_sekolah->sekolah }}</td>
                                        <td width="15%"><b>File Ijasah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">
                                            @if (pathinfo($mahasiswa_sekolah->file_name, PATHINFO_EXTENSION) === 'pdf')
                                                <a href="{{ route('details.file', ['id' => $mahasiswa_sekolah->mahasiswa__sekolah_model_id, 'type' => 'pdf']) }}" target="_blank">View PDF</a>
                                            @else
                                                <a href="{{ route('details.file', ['id' => $mahasiswa_sekolah->mahasiswa__sekolah_model_id, 'type' => 'image']) }}" target="_blank">View Image</a>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>NISN</b></td>
                                        <td width="2%">:</td>
                                        <td>{{ $mahasiswa_sekolah->nisn }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="perguruan-tinggi" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                                <table width="100%">
                                    <tr>
                                        <td width="15%"><b>Perguruan Tinggi Asal</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_perguruan->perguruan_tinggi_asal }}</td>
                                        <td width="15%"><b>SKS Asal(diakui)</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_perguruan->sks_asal }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>Program Studi Asa</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_perguruan->prodi_asal }}</td>
                                        <td width="15%"><b>Surat Rekom. Pindah</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_perguruan->surat_rekom_pindah }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>NIM Asal</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_perguruan->nim_asal }}</td>
                                        <td width="15%"><b>Transkrip Asal</b></td>
                                        <td width="2%">:</td>
                                        <td width="33%">{{ $mahasiswa_perguruan->transkrip_pindah }}</td>
                                    </tr>
                                    <tr>
                                        <td width="15%"><b>IPK Asal</b></td>
                                        <td width="2%">:</td>
                                        <td>{{ $mahasiswa_perguruan->ipk_asal }}</td>
                                    </tr>
                                </table>
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
</script>
</body>

</html>
