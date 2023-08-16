
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Mahasiswa | Unila</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
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
                        <i class="bi bi-chevron-down d-none d-xl-inline-block text-dark"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item text-danger" onclick="logout()"><i class="bi bi-power font-size-16 align-middle mr-1 text-danger"></i></i> <span key="t-logout">Logout</span></a>
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
                    <a href="{{ route('mahasiswa') }}" class="waves-effect text-light active">
                        <i class="bi bi-people m-0 text-light"></i>
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
        <div class="container-fluid"><div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header py-3">
                <h4 class="card-title mb-0 text-dark">Form Mahasiswa</h4>
                <div class="toolbar">
                    <a href="{{ route('mahasiswa') }}"><button type="button" class="btn btn-primary ">Kembali</button></a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('update.mahasiswa', ['id' => @$mahasiswa->id]) }}" method="post" id="form-main form-update" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" class="iid" name="iid" value="">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="id_akun" id="id_akun" value="">
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="npm">NPM</label>
                                    <input type="number" class="form-control form-control" name="npm" id="npm" value="{{ $mahasiswa->npm }}" onkeypress="return cek_nomor(event)" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="kel">Kelas/Kelompok</label>
                                    <input type="text" class="form-control form-control" name="kelas" id="kelas" value="{{ $mahasiswa->kelas }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $mahasiswa->nama_lengkap }}"  required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                                    <select class="form-control form-control" name="jenis_pendaftaran" id="jenis_pendaftaran" value="{{ $mahasiswa->jenis_pendaftaran }}" required>
                                        <option selected>-Pilih Jenis Pendaftaran-</option>
                                        <option {{ $mahasiswa->jenis_pendaftaran == '1' ? 'selected' : '' }} value="1" >Peserta Didik Baru</option>
                                        <option {{ $mahasiswa->jenis_pendaftaran == '2' ? 'selected' : '' }} value="2" >Lintas Jalur</option>
                                        <option {{ $mahasiswa->jenis_pendaftaran == '3' ? 'selected' : '' }} value="3" >Pindahan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="program_studi">Program Studi</label>
                                    <select class="form-control form-control" name="prodi" id="prodi" required>
                                        <option selected>-Pilih Program Studi-</option>
                                        <option {{ $mahasiswa->prodi == '1' ? 'selected' : '' }} value="1" >S2 Teknologi Pendidikan</option>
                                        <option {{ $mahasiswa->prodi == '2' ? 'selected' : '' }} value="2" >S2 Manajemen Pendidikan</option>
                                        <option {{ $mahasiswa->prodi == '3' ? 'selected' : '' }} value="3" >S2 Pend. IPS</option>
                                        <option {{ $mahasiswa->prodi == '4' ? 'selected' : '' }} value="4" >S2 Pend. Bahasa Indonesia</option>
                                        <option {{ $mahasiswa->prodi == '5' ? 'selected' : '' }} value="5" >S1 Bimbingan Konseling</option>
                                        <option value="6" >S1 Pend. Jasmani & Kesehatan</option>
                                        <option value="7" >S1 Pend. Guru Sekolah Dasar</option>
                                        <option value="8" >S2 Pend. Guru SD</option>
                                        <option value="9" >S1 Pend. Guru PAUD</option>
                                        <option value="10" >S1 Pend. Ekonomi</option>
                                        <option value="11" >S1 Pend. Geografi</option>
                                        <option value="12" >S1 Pend. Kewarganegaraan</option>
                                        <option value="13" >S1 Pend. Sejarah</option>
                                        <option value="14" >S1 Pend. Matematika</option>
                                        <option value="15" >S1 Pend. Biologi</option>
                                        <option value="16" >S1 Pend. Kimia</option>
                                        <option value="17" >S1 Pend. Fisika</option>
                                        <option value="18" >S1 Pend. Bahasa Indonesia</option>
                                        <option value="19" >S1 Pend. Bahasa Inggris</option>
                                        <option value="20" >S1 Pend. Seni Tari</option>
                                        <option value="21" >S2 Pendidikan Bahasa Inggris</option>
                                        <option value="22" >S2 Pendidikan Keguruan Guru SD</option>
                                        <option value="23" >S1 Pendidikan Bahasa Perancis</option>
                                        <option value="24" >S2 Pendidikan Fisika</option>
                                        <option value="25" >S2 Pendidikan Matematika</option>
                                        <option value="26" >S2 Keguruan IPA</option>
                                        <option value="27" >S2 Pendidikan Bahasa Lampung</option>
                                        <option value="28" >S1 Pendidikan Teknologi Informasi</option>
                                        <option value="29" >S1 Pendidikan Musik</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="jalur_pendaftaran">Jalur Pendaftaran</label>
                                    <input type="text" class="form-control form-control" name="jalur_pendaftaran" id="jalur_pendaftaran" value="{{ $mahasiswa->jalur_pendaftaran }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="konsentrasi">Konsentrasi</label>
                                    <input type="text" class="form-control form-control" name="konsentrasi" id="konsentrasi" value="{{ $mahasiswa->konsentrasi }}"  required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="gelombang">Gelombang</label>
                                    <input type="text" class="form-control form-control" name="gelombang" id="gelombang" value="{{ $mahasiswa->gelombang }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="periode_masuk">Periode Masuk</label>
                                    <input type="text" class="form-control form-control" name="periode_masuk" id="periode_masuk" value="{{ $mahasiswa->periode_masuk }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="tanggal_masuk">Tanggal Masuk</label>
                                    <input type="date" class="form-control form-control" name="tanggal_masuk" id="tanggal_masuk" value="{{ $mahasiswa->tanggal_masuk }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="tahun_kurikulum">Tahun Kurikulum</label>
                                    <input type="number" class="form-control form-control" name="tahun_kurikulum" id="tahun_kurikulum" value="{{ $mahasiswa->tahun_kurikulum }}"  required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nomor_tes">Nomor Tes</label>
                                    <input type="text" class="form-control form-control" name="nomor_tes" id="nomor_tes" value="{{ $mahasiswa->nomor_tes }}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="sistem_kuliah">Sistem Kuliah</label>
                                    <input type="text" class="form-control form-control" name="sistem_kuliah" id="sistem_kuliah" value="{{ $mahasiswa->sistem_kuliah }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="beasiswa">Beasiswa</label>
                                    <input type="text" class="form-control form-control" name="beasiswa" id="beasiswa" value="{{ $mahasiswa->beasiswa }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="stat">Status</label>
                                    <input type="text" class="form-control form-control" name="status" id="stat" value="{{ $mahasiswa->status }}" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <div class="tabbed-card" id="form-second" style="display: block;">
                    <ul class="pull-right nav nav-tabs border-tab nav-primary" id="top-tab" role="tablist">
                        <li class="nav-item" id="li-info"><a class="nav-link active" id="informasi-umum-tab" data-toggle="tab" href="#informasi-umum" role="tab" aria-controls="informasi-umum" aria-selected="false" data-original-title="" title="">Informasi Umum</a></li>
                        <li class="nav-item" id="li-domisili"><a class="nav-link" id="domisili-tab" data-toggle="tab" href="#domisili" role="tab" aria-controls="domisili" aria-selected="true" data-original-title="" title="">Domisili</a></li>
                        <li class="nav-item" id="li-ortu"><a class="nav-link" id="orang-tua-tab" data-toggle="tab" href="#orang-tua" role="tab" aria-controls="orang-tua" aria-selected="true" data-original-title="" title="">Orang Tua</a></li>
                        <li class="nav-item" id="li-wali"><a class="nav-link" id="wali-tab" data-toggle="tab" href="#wali" role="tab" aria-controls="wali" aria-selected="true" data-original-title="" title="">Wali</a></li>
                        <li class="nav-item" id="li-sekolah"><a class="nav-link" id="sekolah-tab" data-toggle="tab" href="#sekolah" role="tab" aria-controls="sekolah" aria-selected="true" data-original-title="" title="">Sekolah</a></li>
                        <li class="nav-item" id="li-perguruan"><a class="nav-link" id="perguruan-tinggi-tab" data-toggle="tab" href="#perguruan-tinggi" role="tab" aria-controls="perguruan-tinggi" aria-selected="true" data-original-title="" title="">Perguruan Tinggi</a></li>
                    </ul><br>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="informasi-umum" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
                            <form action="{{ route('update.mahasiswa', ['id' => @$mahasiswa_umum->informasi_umum_id]) }}" method="POST" id="form-info form-update" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="informasi">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-control form-control" name="jenis_kelamin">
                                                    <option selected>-Pilih Jenis Kelamin-</option>
                                                    <option {{ $mahasiswa_umum->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }} value="Laki-Laki" >Laki-Laki</option>
                                                    <option {{ $mahasiswa_umum->jenis_kelamin == 'Perempuan' ? 'selected' : '' }} value="Perempuan" >Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="email">Email Pribadi</label>
                                                <input type="email" class="form-control form-control" value="{{ $mahasiswa_umum->email }}" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->tempat_lahir }}" name="tempat_lahir"  >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="status_nikah">Status Nikah</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->status_nikah }}" name="status_nikah"  >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" value="{{ $mahasiswa_umum->tanggal_lahir }}" name="tanggal_lahir"  >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="nik">NIK</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->nik }}" name="nik"  >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="agama">Agama</label>
                                                <select class="form-control form-control" name="agama" >
                                                    <option selected>-Pilih Agama-</option>
                                                    <option {{ $mahasiswa_umum->agama == 'Islam' ? 'selected' : '' }} value="Islam" >Islam</option>
                                                    <option {{ $mahasiswa_umum->agama == 'Kristen' ? 'selected' : '' }} value="Kristen" >Kristen</option>
                                                    <option {{ $mahasiswa_umum->agama == 'Hindu' ? 'selected' : '' }} value="Hindu" >Hindu</option>
                                                    <option {{ $mahasiswa_umum->agama == 'Budha' ? 'selected' : '' }} value="Budha" >Budha</option>
                                                    <option {{ $mahasiswa_umum->agama == 'Katolik' ? 'selected' : '' }} value="Katolik" >Katolik</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="no_kk">No.KK</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->no_kk }}" name="no_kk" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="suku">Suku</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->suku }}" name="suku">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="no_kps">No.KPS</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->no_kps }}" name="no_kps"   >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="gol_darah">Golongan Darah</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->golongan_darah }}" name="golongan_darah">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pekerjaan">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->pekerjaan }}" name="pekerjaan" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="berat_badan">Berat Badan(kg)</label>
                                                <input type="number" class="form-control form-control" value="{{ $mahasiswa_umum->berat_badan }}" name="berat_badan"  >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="penghasilan">Penghasilan</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->penghasilan }}" name="penghasilan" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tinggi_badan">Tinggi Badan(cm)</label>
                                                <input type="number" class="form-control form-control" value="{{ $mahasiswa_umum->tinggi_badan }}" name="tinggi_badan"  >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="instansi">Instansi Pekerjaan</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->instansi_pekerjaan }}" name="instansi_pekerjaan"  >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="telp">No. Telepon</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->no_telp }}" name="no_telp"  >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="transportasi">Transportasi</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->transport }}" name="transport">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="no_hp">No. HP</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->no_hp }}" name="no_hp" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="akta_kelahiran">Akta Kelahiran</label>
                                                <input type="text" class="form-control form-control" value="{{ $mahasiswa_umum->akta_kelahiran }}" name="akta_kelahiran" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email_kampus">Email Kampus</label>
                                                <input type="email" class="form-control form-control" value="{{ $mahasiswa_umum->email_kampus }}" name="email_kampus"  >
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="domisili" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
                            <form action="{{ route('update.mahasiswa', @$mahasiswa_domisili->domisili_model_id) }}" method="POST" id="form-domisili form-update" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="domisili">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat" value="{{ $mahasiswa_domisili->alamat }}" id="alamat" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="kota">Kota</label>
                                                <input type="text" class="form-control form-control" name="kota" id="kota" value="{{ $mahasiswa_domisili->kota }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="rt">RT</label>
                                                <input type="text" class="form-control form-control" name="rt" id="rt" value="{{ $mahasiswa_domisili->rt }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="kecamatan">Kecamatan</label>
                                                <input type="text" class="form-control form-control" name="kecamatan" id="kecamatan" value="{{ $mahasiswa_domisili->kecamatan }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="rw">RW</label>
                                                <input type="text" class="form-control form-control" name="rw" id="rw" value="{{ $mahasiswa_domisili->rw }}" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="negara">Kewarganegaraan</label>
                                                <select class="form-control form-control" name="kewarganegaraan" id="negara">
                                                    <option selected>-Pilih Kewarganegaraan-</option>
                                                    <option {{ $mahasiswa_domisili->kewarganegaraan == 'WNI' ? 'selected' : '' }} value="WNI" >WNI</option>
                                                    <option {{ $mahasiswa_domisili->kewarganegaraan == 'WNA' ? 'selected' : '' }} value="WNA" >WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="dusun">Dusun</label>
                                                <input type="text" class="form-control form-control" name="dusun" id="dusun" value="{{ $mahasiswa_domisili->dusun }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="kode_pos">Kode Pos</label>
                                                <input type="text" class="form-control form-control" name="kode_pos" id="kode_pos" value="{{ $mahasiswa_domisili->kode_pos }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="desa">Desa/Kelurahan</label>
                                                <input type="text" class="form-control form-control" name="kelurahan" value="{{ $mahasiswa_domisili->kelurahan }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="status_tinggal">Status Tinggal</label>
                                                <input type="text" class="form-control form-control" name="status_tinggal" id="status_tinggal" value="{{ $mahasiswa_domisili->status_tinggal }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="propinsi">Propinsi</label>
                                                <input type="text" class="form-control form-control" name="propinsi" id="propinsi" value="{{ $mahasiswa_domisili->propinsi }}">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit" >Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="orang-tua" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('update.mahasiswa', @$mahasiswa_ortu->mahasiswa_ortu_model_id ) }}" method="POST" id="form-ortu form-update" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="ortu">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <h5>Biodata Ayah</h5>
                                                <br>
                                                <label for="nama_ayah">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control" name="nama_ayah" id="nama_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>Biodata Ibu</h5>
                                                <br>
                                                <label for="nama_ibu">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control" name="nama_ibu" id="nama_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nik_ayah">NIK</label>
                                                <input type="text" class="form-control form-control" name="nik_ayah" id="nik_ayah" value="" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="nik_ibu">NIK</label>
                                                <input type="text" class="form-control form-control" name="nik_ibu" id="nik_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" name="tgl_lahir_ayah" id="tanggal_lahir_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" name="tgl_lahir_ibu" id="tanggal_lahir_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_hidup_ayah">Status Hidup</label>
                                                <input type="text" class="form-control form-control" name="status_hidup_ayah" id="status_hidup_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="status_hidup_ibu">Status Hidup</label>
                                                <input type="text" class="form-control form-control" name="status_hidup_ibu" id="status_hidup_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_kerabat_ayah">Status Kekerabatan</label>
                                                <input type="text" class="form-control form-control" name="status_kerabatan_ayah" id="status_kerabat_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="status_kerabat_ibu">Status Kekerabatan</label>
                                                <input type="text" class="form-control form-control" name="status_kerabatan_ibu" id="status_kerabat_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pendidikan_ayah">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_ayah" id="pendidikan_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pendidikan_ibu">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_ibu" id="pendidikan_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pekerjaan_ayah">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pekerjaan_ibu">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="penghasilan_ayah">Penghasilan</label>
                                                <input type="text" class="form-control form-control" name="penghasilan_ayah" id="penghasilan_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="penghasilan_ibu">Penghasilan</label>
                                                <input type="text" class="form-control form-control" name="penghasilan_ibu" id="penghasilan_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="alamat_ayah">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat_ayah" id="alamat_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamat_ibu">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat_ibu" id="alamat_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="no_telp_ayah">No. Telepon</label>
                                                <input type="text" class="form-control form-control" name="no_telp_ayah" id="no_telp_ayah" value="" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="no_telp_ibu">No. Telepon</label>
                                                <input type="text" class="form-control form-control" name="no_telp_ibu" id="no_telp_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email_ayah">Email</label>
                                                <input type="email" class="form-control form-control" name="email_ayah" id="email_ayah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="email_ibu">Email</label>
                                                <input type="email" class="form-control form-control" name="email_ibu" id="email_ibu" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="aktivasi_ayah">Aktivasi?</label>
                                                <input type="text" class="form-control form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="aktivasi_ibu">Aktivasi?</label>
                                                <input type="text" class="form-control form-control">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('inputwali') }}" method="post" id="form-wali" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="wali">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nama_wali">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control" name="nama_wali" id="nama_wali" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pekerjaan_wali">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" name="pekerjaan_wali" id="pekerjaan_wali" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nik_wali">NIK</label>
                                                <input type="text" class="form-control form-control" name="nik_wali" id="nik_wali" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="penghasilan_wali">Penghasilan</label>
                                                <input type="text" class="form-control form-control" name="penghasilan_wali" id="penghasilan_wali" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tanggal_lahir_wali">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" name="tgl_lahir_wali" id="tanggal_lahir_wali" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamat_wali">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat_wali" id="alamat_wali" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_hidup_wali">Status Hidup</label>
                                                <input type="text" class="form-control form-control" name="status_hidup_wali" id="status_hidup_wali" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="no_telp_wali">No. Telepon</label>
                                                <input type="text" class="form-control form-control" name="no_telp_wali" id="no_telp_wali" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_kerabat_wali">Status Kekerabatan</label>
                                                <input type="text" class="form-control form-control" name="status_kerabatan_wali" id="status_kerabat_wali" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="email_wali">Email</label>
                                                <input type="text" class="form-control form-control" name="email_wali" id="email_wali" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pendidikan_wali">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_wali" id="pendidikan_wali" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="aktivasi_wali">Aktivasi?</label>
                                                <input type="text" class="form-control form-control">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="sekolah" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('inputsekolah') }}" method="post" id="form-sekolah" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="sekolah">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pendidikan_asal">Pendidikan Asal</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_asal" id="pendidikan_asal" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamat_sekolah">Alamat Sekolan</label>
                                                <input type="text" class="form-control form-control" name="alamat_sekolah" id="alamat_sekolah" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="propinsi_sekolah">Propinsi Sekolah</label>
                                                <input type="text" class="form-control form-control" name="propinsi_sekolah" id="propinsi_sekolah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="telp_sekolah">Telepon Sekolah</label>
                                                <input type="text" class="form-control form-control" name="telp_sekolah" id="telp_sekolah" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="kota_sekolah">Kota Sekolah</label>
                                                <input type="text" class="form-control form-control" name="kota_sekolah" id="kota_sekolah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="nomor_ijasah">Nomor Ijasah Sekolah</label>
                                                <input type="text" class="form-control form-control" name="nomor_ijasah_sekolah" id="nomor_ijasah" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="sekolah">Sekolah</label>
                                                <input type="text" class="form-control form-control" name="sekolah" id="sekolah" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="file_ijasah">File Ijasah Sekolah</label>
                                                <input type="file" class="form-control form-control" name="image" id="image" accept=".jpg,.jpeg,.png,.pdf,.gif">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nisn">NISN</label>
                                                <input type="text" class="form-control form-control" name="nisn" id="nisn" value="">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="perguruan-tinggi" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('inputsekolahperguruan') }}" method="post" id="form-perguruan" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="perguruan_tinggi">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="perguruan_tinggi_asal">Perguruan Tinggi Asal</label>
                                                <input type="text" class="form-control form-control" name="perguruan_tinggi_asal" id="perguruan_tinggi_asal" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="sks_asal">SKS Asal(diakui)</label>
                                                <input type="text" class="form-control form-control" name="sks_asal" id="sks_asal" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="program_studi_asal">Program Studi Asal</label>
                                                <input type="text" class="form-control form-control" name="prodi_asal" id="program_studi_asal" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="surat_rekom_pindah">Surat Rekom. Pindah</label>
                                                <input type="text" class="form-control form-control" name="surat_rekon_pindah" id="surat_rekom_pindah" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nim_asal">NIM Asal</label>
                                                <input type="text" class="form-control form-control" name="nim_asal" id="nim_asal" value="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="transkrip_asal">Transkrip Asal</label>
                                                <input type="text" class="form-control form-control" name="transkrip_pindah" id="transkrip_asal" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="ipk_asal">IPK Asal</label>
                                                <input type="text" class="form-control form-control" name="ipk_asal" id="ipk_asal" value="">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.form-update').submit(function(event) {
        event.preventDefault();

        var form = $(this);
        var formData = new FormData(form[0]);
        var id = form.data('id'); // Mengambil nilai ID dari atribut data formulir yang diklik

        $.ajax({
            url: "{{ route('update.mahasiswa', ['id' => $mahasiswa->id], ['id' => $mahasiswa_umum->informasi_umum_id ]) }}",
            method: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response.message === 'Update') {
                    toastr.success('Data Berhasil diupdate', 'Berhasil')
                } else {
                    toastr.error('Data tidak boleh sama', 'Gagal')
                }
            },
            error: function() {
                Swal.fire({
                    position: 'center',
                    title: 'Error!',
                    text: 'Masukan Data Terlebih Dahulu',
                    icon: 'info',
                    timer: 2400,
                    showConfirmButton: false,
                    timerProgressBar: true,
                });
            }
        });
    });
});





</script>
<script>
    function cek_nomor(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        var inputValue = evt.target.value;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false; // Mencegah karakter non-angka ditambahkan
        }
        return true;
    }
</script>

<script>
    @if (session()->has('success'))
    toastr.success('{{ session('success') }}', 'Berhasil')
    @endif
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
				window.location.href = '{{ route('logout') }}';
			}
		});
	}
</script>


</body>

</html>
