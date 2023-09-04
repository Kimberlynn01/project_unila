
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dosen | Unila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content='Unila' />
    <meta name='author' content='unila' />
    <meta name='keywords' content='Unila'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        #toastr-notifications {
            position: fixed;
            top: 20px; /* Sesuaikan posisi notifikasi */
            right: 20px; /* Sesuaikan posisi notifikasi */
            z-index: 99999; /* Nilai z-index yang tinggi */
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
                        <span class="d-none d-xl-inline-block ml-1 font-weight-bold text-dark" key="t-henry">{{ Auth::user()->username }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block text-dark"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" onclick="edit_password({{ Auth::user()->id }})"><i class="bi bi-gear"></i> Settings</a>
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
                    <a href="{{ route('dosen') }}" class="waves-effect ">
                        <i class='bi bi-person-badge-fill'></i>
                        <span>Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bxs-bar-chart-square"></i>
                        <span>Rekap Dosen</span>
                    </a>
                    <ul class="submenu mm-collapse">
                        <li><a href="#">Dashboard Dosen</a></li>
                        <li class=""><a href="back/rekap/jenjang_pendidikan" class="waves-effect">Jenjang Pendidikan</a></li>
                        <li><a href="back/rekap/jenis_kelamin" class="waves-effect">Jenis Kelamin</a></li>
                        <li><a href="back/rekap/Belum_strata_dua" class="waves-effect">Belum S2</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect" aria-expanded="false">
                        <i class="bx bxs-bar-chart-square"></i>
                        <span>Institusi</span>
                    </a>
                    <ul class="submenu mm-collapse" style="height: 0px;">
                        <li><a href="{{ route('iku.one') }}">IKU 1</a></li>
                        <li><a href="back/institut/iku_2">IKU 2</a></li>
                        <li><a href="back/institut/iku_3">IKU 3</a></li>
                        <li><a href="back/institut/iku_4">IKU 4</a></li>
                        <li><a href="back/institut/iku_5">IKU 5</a></li>
                        <li><a href="back/institut/iku_6">IKU 6</a></li>
                        <li><a href="back/institut/iku_7">IKU 7</a></li>
                        <li><a href="back/institut/iku_8">IKU 8</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"><style type="text/css">
    .inline {
        display: inline-block;
    }

    .vtop {
        vertical-align: top;
    }

    .line-through {
        text-decoration: line-through;
    }
</style>
<div class="row">

    <div id="toastr-notifications"></div>
    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('message_error'))
            <div class="alert alert-danger">
                {{ session('message_error') }}
            </div>
        @endif
        <div class="card">

            <div class="card-header list-group-item list-group-item-action active">
                Data Dosen
                <div class="toolbar">
                    <button type="button" data-toggle="modal" data-target="#modal-popout" id="btn-tambah-dosen" class="btn btn-light "><i class="fa fa-plus"></i> Tambah Data</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped" id="table-dosen" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Bidang Keahlian</th>
                                <th>Asal PT S-3</th>
                                <th>Tahun Lulus</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                           @foreach ($dosen_profile as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->nama_dosen }}</td>
                                <td>{{ $row->keahlian }}</td>
                                <td>
                                    @if ($row->pendidikan_dosen->isNotEmpty())
                                        {{ $row->pendidikan_dosen[0]->universitas }}
                                    @else
                                        <p>-</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($row->pendidikan_dosen->isNotEmpty())
                                        {{ $row->pendidikan_dosen[0]->tahun_lulus }}
                                    @else
                                        <p>-</p>
                                    @endif
                                </td>

                                <td class="d-flex justify-content-center">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-warning" title="Details Dosen" onclick="detailsButton({{ $row->id }})">
                                            <i class="bx bxs-detail" ></i>
                                        </button>
                                        <button class="btn btn-success" title="Reset Password" onclick="resetPassword({{ $row->users->id }})">
                                            <i class="bx bxs-key"></i>
                                        </button>
                                        <button class="btn btn-danger" title="Delete Data Dosen" onclick="deleteData('{{ route('delete.dosen', ['id' => $row->id]) }}')">
                                            <i class="bx bxs-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-popout" role="dialog" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <div class="modal-content">
            <div class="loading">
                <div class="d-flex justify-content-center">
                    {{-- <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div> --}}
                </div>
            </div>
            <div class="modal-header border">
                <div class="modal-title text-light">
                    <h5>Form Tambah Data Dosen</h5>
                </div>
                <button type="button" class="btn-close" style="bg-transparent"  data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div id="content_modal">
                <div class="container ">
                    <input type="text" class="mt-3" name="id_dosen" id="id_dosen" value="">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Profil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pendidikan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Penelitian</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pengabdian-tab" data-toggle="tab" data-target="#pengabdian" type="button" role="tab" aria-controls="pengabdian" aria-selected="false">Pengabdian</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penghargaan-tab" data-toggle="tab" data-target="#penghargaan" type="button" role="tab" aria-controls="penghargaan" aria-selected="false">Penghargaan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="karya_ilmiah-tab" data-toggle="tab" data-target="#karya_ilmiah" type="button" role="tab" aria-controls="karya_ilmiah" aria-selected="false">Karya Ilmiah</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="kegiatan-tab" data-toggle="tab" data-target="#kegiatan" type="button" role="tab" aria-controls="kegiatan" aria-selected="false">Kegiatan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jurnal-tab" data-toggle="tab" data-target="#jurnal" type="button" role="tab" aria-controls="jurnal" aria-selected="false">Jurnal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="buku-tab" data-toggle="tab" data-target="#buku" type="button" role="tab" aria-controls="buku" aria-selected="false">Buku</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jabatan-tab" data-toggle="tab" data-target="#role-jabatan" type="button" role="tab" aria-controls="role-jabatan" aria-selected="false">Jabatan</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="organisasi-tab" data-toggle="tab" data-target="#organisasi" type="button" role="tab" aria-controls="organisasi" aria-selected="false">Organisasi</button>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <!-- Tab Profil Dosen Start Here -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors as $key => $value)
                                    <p>{{ $value }}</p>
                                @endforeach
                            </div>
                        @endif
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="{{ route('dosen.profile') }}" method="post" id="form-profil" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ 'user_id' }}">
                                <div class="h3 text-primary"><u>Profil Dosen</u></div>
                                <div class="form-row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="">NIP</label>
                                        <input type="text" name="nip_dosen" id="nip_dosen" class="form-control" placeholder="NIP Dosen" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="Nama Lengkap" required="">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="">Tempat Tgl. Lahir <small class="text-danger">Tempat, dd mm yyyy</small></label>
                                        <input type="text" name="ttl_dosen" id="ttl_dosen" class="form-control" placeholder="Tempat Tanggal Lahir" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Jurusan / Prodi</label>
                                        <select name="id_prodi" id="id_prodi" class="form-control" required="">
                                            <option value="" selected>- Pilih Jurusan/Prodi --</option>
                                                                            <option value="1">S2 Teknologi Pendidikan</option>
                                                                            <option value="25">S2 Pendidikan Matematika</option>
                                                                            <option value="22">S2 Pendidikan Keguruan Guru SD</option>
                                                                            <option value="24">S2 Pendidikan Fisika</option>
                                                                            <option value="27">S2 Pendidikan Bahasa Lampung</option>
                                                                            <option value="21">S2 Pendidikan Bahasa Inggris</option>
                                                                            <option value="3">S2 Pend. IPS</option>
                                                                            <option value="8">S2 Pend. Guru SD</option>
                                                                            <option value="4">S2 Pend. Bahasa Indonesia</option>
                                                                            <option value="2">S2 Manajemen Pendidikan</option>
                                                                            <option value="26">S2 Keguruan IPA</option>
                                                                            <option value="28">S1 Pendidikan Teknologi Informasi</option>
                                                                            <option value="29">S1 Pendidikan Musik</option>
                                                                            <option value="23">S1 Pendidikan Bahasa Perancis</option>
                                                                            <option value="20">S1 Pend. Seni Tari</option>
                                                                            <option value="13">S1 Pend. Sejarah</option>
                                                                            <option value="14">S1 Pend. Matematika</option>
                                                                            <option value="16">S1 Pend. Kimia</option>
                                                                            <option value="12">S1 Pend. Kewarganegaraan</option>
                                                                            <option value="6">S1 Pend. Jasmani &amp; Kesehatan</option>
                                                                            <option value="7">S1 Pend. Guru Sekolah Dasar</option>
                                                                            <option value="9">S1 Pend. Guru PAUD</option>
                                                                            <option value="11">S1 Pend. Geografi</option>
                                                                            <option value="17">S1 Pend. Fisika</option>
                                                                            <option value="10">S1 Pend. Ekonomi</option>
                                                                            <option value="15">S1 Pend. Biologi</option>
                                                                            <option value="19">S1 Pend. Bahasa Inggris</option>
                                                                            <option value="18">S1 Pend. Bahasa Indonesia</option>
                                                                            <option value="5">S1 Bimbingan Konseling</option>
                                                                    </select>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="">Email</label>
                                        <input type="email" name="email_dosen" id="email_dosen" class="form-control" placeholder="abc@xyz.com" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Website</label>
                                        <input type="text" name="website_dosen" id="website_dosen" class="form-control" placeholder="Website" required="">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="">Keahlian</label>
                                        <input type="text" name="keahlian" id="keahlian" class="form-control" placeholder="Keahlian" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Judul Desertasi</label>
                                        <input type="text" name="judul_desertasi" id="judul_desertasi" class="form-control" placeholder="Judul Desertasi" required="">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="form-group col-md-6">
                                        <label for="">Pas Foto</label>
                                        <input type="file" name="pas_foto" id="pas_foto" class="form-control" accept=".jpeg,.png,.gif,.jfif,.jpg" required="">
                                    </div>
                                </div>

                                <button type="submit" class="submit-form btn btn-primary mb-3" data-form="form-profil" data-route="{{ route('dosen.profile') }}" data-message="Data Profile Dosen berhasil disimpan">Simpan</button>
                            </form>
                        </div>
                        <!-- Tab Profil Dosen End Here -->

                        <!-- Tab Riwayat Pendidikan Start Here -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- outer repeater -->
                            <div class="h3 text-primary mb-3"><u>Riwayat Pendidikan</u></div>
                            <form action="{{ route('dosen.pendidikan') }}" id="form-pendidikan" class="form_dosen" method="post">
                                @csrf
                                <input type="hidden" name="jenis_input" value="pendidikan">
                                <input type="hidden" name="form_profile_dosen_id" value="{{ session('form_profile_dosen_id') }}">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="">Nama Universitas</label>
                                            <input type="text" name="universitas" id="universitas" class="form-control" placeholder="Universitas">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Fakultas</label>
                                            <input type="text" name="fakultas" id="fakultas" class="form-control" placeholder="Fakultas">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Program Studk</label>
                                            <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Universitas">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Jenjang Pendidikan</label>
                                            <select name="jenjang" id="jenjang" class="form-control">
                                                <option value="" selected>-- Pilih Jenjang Pendidikan</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Tahun Lulus</label>
                                            <input type="number" name="tahun_lulus" id="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <button type="submit" data-form="form-pendidikan" data-route="{{ route('dosen.pendidikan') }}" class="submit-form btn btn-primary" data-message="Data Pendidikan Dosen berhasil disimpan">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Tab Riwayat Pendidikan End Here -->

                        <!-- Tab Penelitian Start Here -->
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="h3 text-primary"><u>Penelitian</u></div>
                            <form class="mt-3 form_dosen" action="{{ route('dosen.penelitian') }}" id="form-penelitian"  method="post">
                                @csrf
                                <input type="hidden" name="jenis_input" value="penelitian">
                                <div class="col-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="">Judul Penelitian</label>
                                            <input type="text" name="judul_penelitian" id="judul_penelitian" class="form-control" placeholder="Judul Penelitian" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Jabatan</label>
                                            <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan" required="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="">Tahun Penelitian</label>
                                            <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun Penelitian" required="">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Sumber Dana</label>
                                            <select name="sumber_dana" id="sumber_dana" class="form-control" required="">
                                                <option value="" selected="" disabled="">-- Pilih Sumber Dana</option>
                                                <option value="dana mandiri">Dana Mandiri</option>
                                                <option value="dikti">DIKTI</option>
                                                <option value="dipa">DIPA</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control" required="">
                                                <option value="" selected="" disabled="">-- Pilih Kategori Penelitian</option>
                                                <option value="nasional">Nasional</option>
                                                <option value="internasional">Internasional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <button type="submit" class="submit-form btn btn-primary" data-form="form-penelitian" data-route="{{ route('dosen.penelitian') }}" data-message="Data Penelitian Dosen berhasil disimpan">Simpan</button>
                                    </div>

                        </div></form>
                        <!-- Tab Penelitian End Here -->
                    </div>
                    <!-- Tab pengabdian Start Here -->
                    <div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
                        <div class="h3 text-primary"><u>Pengabdian</u></div>
                        <form class="mt-3 form_dosen" id="form-pengabdian" action="{{ route('dosen.pengabdian') }}" method="post">
                            @csrf
                            <input type="hidden" name="jenis_input" value="pengabdian">
                            <div class="col-12">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="">Judul Pengabdian</label>
                                        <input type="text" name="judul_pengabdian" id="judul_pengabdian" class="form-control" placeholder="Judul Penelitian" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Jabatan</label>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan" required="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="">Tahun Pengabdian</label>
                                        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun Penelitian" required="">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Sumber Dana</label>
                                        <select name="sumber_dana" id="sumber_dana" class="form-control" required="">
                                            <option value="" selected="" disabled="">-- Pilih Sumber Dana</option>
                                            <option value="dana mandiri">Dana Mandiri</option>
                                            <option value="dikti">DIKTI</option>
                                            <option value="dipa">DIPA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Kategori</label>
                                        <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Kategori">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <button type="submit" class="submit-form btn btn-primary" data-form="form-pengabdian" data-route="{{ route('dosen.pengabdian') }}" data-message="Data Pengabdian Dosen berhasil disimpan">Simpan</button>
                                </div>

                    </div></form>
                </div>
                <!-- Tab pengabdian End Here -->

                <!-- Tab Penghargaan Start Here -->
                <div class="tab-pane fade" id="penghargaan" role="tabpanel" aria-labelledby="penghargaan-tab">
                    <div class="h3 text-primary"><u>Penghargaan</u></div>
                    <form class="mt-3 form_dosen" id="form-penghargaan" action="{{ route('dosen.penghargaan') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="penghargaan">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Nama Penghargaan</label>
                                    <input type="text" name="nama_penghargaan" id="nama_penghargaan" class="form-control" placeholder="nama Penghargaan" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Institusi</label>
                                    <input type="text" name="institusi" id="institusi" class="form-control" placeholder="Institusi" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control" required="">
                                        <option value="" selected="" disabled="">-- Pilih Kategori Penghargaan --</option>
                                        <option value="nasional">Nasional</option>
                                        <option value="internasional">Internasional</option>
                                        <option value="lokal">Lokal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="submit-form btn btn-primary" data-route="{{ route('dosen.penghargaan') }}" data-message="Data Penghargaan Dosen berhasil disimpan" data-form="form-penghargaan">Simpan</button>
                            </div>

                </div></form>
                </div>
                <!-- Tab Penghargaan End Here -->

                <!-- Tab Karya Ilmiah Start Here -->
                <div class="tab-pane fade" id="karya_ilmiah" role="tabpanel" aria-labelledby="karya_ilmiah-tab">
                    <div class="h3 text-primary"><u>Karya Ilmiah</u></div>
                    <form class="mt-3 form_dosen" id="form-karya_ilmiah" action="{{ route('dosen.karyailmiah') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="karya ilmiah">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Judul Karya Ilmiah</label>
                                    <input type="text" name="judul_karya_ilmiah" id="judul_karya_ilmiah" class="form-control" placeholder="Judul Karya Ilmiah" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Jenis Karya Ilmiah</label>
                                    <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Jenis Karya Ilmiah" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control" required="">
                                        <option value="" selected="" disabled="">-- Pilih Kategori --</option>
                                        <option value="nasional">Nasional</option>
                                        <option value="internasional">Internasional</option>
                                        <option value="lokal">Lokal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="submit-form btn btn-primary" data-form="form-karya_ilmiah" data-route="{{ route('dosen.karyailmiah') }}" data-message="Data Karya Ilmiah Dosen berhasil disimpan">Simpan</button>
                            </div>

                </div></form>
                <!-- Tab Penghargaan End Here -->
                </div>

                <!-- Tab Kegiatan Start Here -->
                <div class="tab-pane fade" id="kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
                    <div class="h3 text-primary"><u>Kegiatan</u></div>
                    <form class="mt-3 form_dosen" id="form-kegiatan" action="{{ route('dosen.kegiatan') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="kegiatan">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Nama Kegiatan</label>
                                    <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Nama Kegiatan" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Peranan</label>
                                    <input type="text" name="peranan" id="peranan" class="form-control" placeholder="Peranan Sebagai" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control" required="">
                                        <option value="" selected="" disabled="">-- Pilih Kategori --</option>
                                        <option value="nasional">Nasional</option>
                                        <option value="internasional">Internasional</option>
                                        <option value="lokal">Lokal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="submit-form btn btn-primary" data-form="form-kegiatan" data-message="Data Kegiatan Dosen berhasil disimpan" data-route="{{ route('dosen.kegiatan') }}">Simpan</button>
                            </div>

                </div></form>
                <!-- Tab Kegiatan End Here -->
                </div>

                <!-- Tab Jurnal Start Here -->
                <div class="tab-pane fade" id="jurnal" role="tabpanel" aria-labelledby="jurnal-tab">
                    <div class="h3 text-primary"><u>Jurnal</u></div>
                    <form class="mt-3 form_dosen" id="form-jurnal" action="{{ route('dosen.jurnal') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="jurnal">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Judul Jurnal</label>
                                    <input type="text" name="judul_jurnal" id="judul_jurnal" class="form-control" placeholder="Judul Jurnal" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nama Jurnal <small class="text-danger"><strong>dimuat dalam jurnal</strong></small></label>
                                    <input type="text" name="nama_jurnal" id="nama_jurnal" class="form-control" placeholder="Nama Jurnal" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Tahun <small class="text-danger"><strong>dimuat dalam jurnal</strong></small></label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Volume <small class="text-danger"><strong>dimuat dalam jurnal</strong></small></label>
                                    <input type="text" name="volume" id="volume" class="form-control" placeholder="Volume" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Nomor Registrasi <small class="text-danger"><strong>dimuat dalam jurnal</strong></small></label>
                                    <input type="text" name="no_registrasi" id="no_registrasi" class="form-control" placeholder="Nomor Registrasi" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control" required="">
                                        <option value="" selected="" disabled="">-- Pilih Kategori --</option>
                                        <option value="nasional">Nasional</option>
                                        <option value="internasional">Internasional</option>
                                        <option value="lokal">Lokal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="submit-form btn btn-primary" data-form="form-jurnal" data-route="{{ route('dosen.jurnal') }}" data-message="Data Jurnal Dosen berhasil disimpan">Simpan</button>
                            </div>

                </div></form>
                <!-- Tab Jurnal End Here -->
                </div>

                <!-- Tab Buku Start Here -->
                <div class="tab-pane fade" id="buku" role="tabpanel" aria-labelledby="buku-tab">
                    <div class="h3 text-primary"><u>Buku</u></div>
                    <form class="mt-3 form_dosen" id="form-buku" action="{{ route('dosen.buku') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="buku">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Judul buku</label>
                                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Judul Buku" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">ISBN</label>
                                    <input type="text" name="isbn" id="isbn" class="form-control" placeholder="Isbn" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Penerbit</label>
                                    <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Penerbit" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control" required="">
                                        <option value="" selected="" disabled="">-- Pilih Kategori --</option>
                                        <option value="nasional">Nasional</option>
                                        <option value="internasional">Internasional</option>
                                        <option value="lokal">Lokal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="submit-form btn btn-primary" data-form="form-buku" data-message="Data Buku Dosen berhasil disimpan" data-route="{{ route('dosen.buku') }}">Simpan</button>
                            </div>

                </div></form>
                <!-- Tab Buku End Here -->
                </div>
                <!-- Tab Jabatan Start Here -->
                <div class="tab-pane fade" id="role-jabatan" role="tabpanel" aria-labelledby="jabatan-tab">
                    <div class="h3 text-primary"><u>Jabatan</u></div>
                    <form class="mt-3 form_dosen" id="form-jabatan" action="{{ route('dosen.jabatan') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="jabatan">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Institusi</label>
                                    <input type="text" name="institusi" id="institusi" class="form-control" placeholder="Institusi" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="submit-form btn btn-primary" data-form="form-jabatan" data-route="{{ route('dosen.jabatan') }}" data-message="Data Jabatan Dosen berhasil disimpan">Simpan</button>
                            </div>

                </div></form>
                <!-- Tab Jabatan End Here -->
                </div>
                <!-- Tab Organisasi Start Here -->
                <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                    <div class="h3 text-primary"><u>Organisasi</u></div>
                    <form class="mt-3 form_dosen" id="form-organisasi" action="{{ route('dosen.organisasi') }}" method="post">
                        @csrf
                        <input type="hidden" name="jenis_input" value="organisasi">
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">organisasi</label>
                                    <input type="text" name="organisasi" id="organisasi" class="form-control" placeholder="Organisasi" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Institusi</label>
                                    <input type="text" name="institusi" id="institusi" class="form-control" placeholder="Institusi" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="">
                                </div>
                            </div>
                            <div class="row mb-5 ">
                                <button type="submit" class="submit-form btn btn-primary" data-form="form-organisasi" data-route="{{ route('dosen.organisasi') }}" data-message="Data Organisasi Dosen berhasil disimpan">Simpan</button>
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
				window.location.href = '{{ route('logout') }}';
			}
		});
	}

    var table;
    $(document).ready(function() {
        table = $('#table-dosen').DataTable({
            lengthMenu: [
                [10, 50, 100, -1],
                [10, 50, 100, 'Semua'],
            ],
            stateSave: true,
            language: {
                search: '<span>Cari:</span> _INPUT_',
                searchPlaceholder: 'Masukan pencarian...',
                infoEmpty: "Menampilkan 0 data",
                zeroRecords: "Tidak Ada Data Dosen",
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
        })
    });





    $(document).ready(function() {
    $('.submit-form').click(function(event) {
        event.preventDefault();

        var formId = $(this).data('form');
        var formData = new FormData(document.getElementById(formId));
        var route = $(this).data('route');
        var message = $(this).data('message');

        $.ajax({
            url: route,
            method: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (formId === 'form-profil' && response.message === 'Data Profile Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-pendidikan' && response.message === 'Data Pendidikan Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-penelitian' && response.message === 'Data Penelitian Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-pengabdian' && response.message === 'Data Pengabdian Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-penghargaan' && response.message === 'Data Penghargaan Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-karya_ilmiah' && response.message === 'Data Karya Ilmiah Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-kegiatan' && response.message === 'Data Kegiatan Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-jurnal' && response.message === 'Data Jurnal Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-buku' && response.message === 'Data Buku Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-jabatan' && response.message === 'Data Jabatan Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (formId === 'form-organisasi' && response.message === 'Data Organisasi Dosen berhasil disimpan') {
                    toastr.success(message, 'Berhasil');
                }
                else if (response.message === 'Data sudah ada sebelumnya') {
                    toastr.error('Data sudah ada sebelumnya', 'Gagal');
                }
                else {
                    toastr.error('Terjadi kesalahan', 'Gagal');
                }
            },
            error: function() {
                toastr.error('Masukan Data Terlebih Dahulu', 'Gagal');
            }
        });
    });
});

function detailsButton(id) {
    window.location.href = '/dosen/details/' + id;
}

function resetPassword(id) {
    // Ambil token CSRF dari meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    Swal.fire({
        title: 'Are you sure?',
        text: "Password akan direset !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Reset !'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: `/reset-password/` + id,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                },
                success: function (response) {
                    Swal.fire('Success Mereset Password', response.success, 'success');
                },
                error: function (error) {
                    Swal.fire('Error', 'Gagal mereset password.', 'error');
                }
            });
        }
    });
}



function deleteData(url) {
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

 function edit_password(id) {
    window.location.href = '/edit-password/' + id;
 }

</script>

</body>

</html>
