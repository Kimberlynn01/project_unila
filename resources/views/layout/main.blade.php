<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? '' }} | Unila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content='Unila' />
    <meta name='author' content='unila' />
    <meta name='keywords' content='Unila'>
    <meta content="{{ url('/') }}/" name="base_url" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="shortcut icon" type="image/x-icon/png"
        href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="stylesheet"
        href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/prettify.css">
    <link
        href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/bootstrap.min.css"
        id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/app.min.css" id="app-style"
        rel="stylesheet" type="text/css" />
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/select2/css/select2.min.css"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://codeseven.github.io/toastr/toastr.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
            top: 20px;
            /* Sesuaikan posisi notifikasi */
            right: 20px;
            /* Sesuaikan posisi notifikasi */
            z-index: 99999;
            /* Nilai z-index yang tinggi */
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
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-left p-0"
                            aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block h-100">
                    <button type="button" class="btn header-item waves-effect h-100" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                            src="https://egov.phicos.co.id/lampung/unila/assets/img/profil.png" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1 font-weight-bold text-dark"
                            key="t-henry">{{ Auth::user()->username }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block text-dark"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" onclick="edit_password({{ Auth::user()->id }})"><i
                                class="bi bi-gear"></i> Settings</a>
                        <a class="dropdown-item text-danger" onclick="logout()"><i
                                class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span
                                key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="vertical-menu">
        <button class="btn btn-primary shadow fs-14 d-lg-none d-flex position-absolute btn-close-sidebar">
            <i class="bx bx-x"></i>
        </button>
        <div data-simplebar class="h-100">
            <div id="sidebar-menu">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="https://egov.phicos.co.id/lampung/unila/" target="_blank"
                            class="d-flex flex-column justify-content-center align-items-center p-2 mb-2"
                            style="background-color: white">
                            <div class="d-inline">
                                <img src="https://egov.phicos.co.id/lampung/unila/assets/img/logo-unila.png"
                                    class="img-fluid img-logo-large mb-2">
                                <img src="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png"
                                    class="img-fluid img-logo-small d-none" width="75">
                            </div>
                            <img src="https://egov.phicos.co.id/lampung/unila/assets/img/moto.png"
                                class="img-fluid img-moto">
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
                            <li class=""><a href="back/rekap/jenjang_pendidikan" class="waves-effect">Jenjang
                                    Pendidikan</a></li>
                            <li><a href="back/rekap/jenis_kelamin" class="waves-effect">Jenis Kelamin</a></li>
                            <li><a href="back/rekap/Belum_strata_dua" class="waves-effect">Belum S2</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('pegawai') }}" class="waves-effect">
                            <i class="bx bxs-id-card"></i>
                            <span>Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect" aria-expanded="false">
                            <i class="bx bxs-bar-chart-square"></i>
                            <span>Indikator Kinerja Utama</span>
                        </a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="/iku/one">IKU 1</a></li>
                            <li><a href="{{ route('iku.two') }}">IKU 2</a></li>
                            <li><a href="#">IKU 3</a></li>
                            <li><a href="#">IKU 4</a></li>
                            <li><a href="#">IKU 5</a></li>
                            <li><a href="#">IKU 6</a></li>
                            <li><a href="#">IKU 7</a></li>
                            <li><a href="#">IKU 8</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('index.dokumen') }}" class="waves-effect ">
                            <i class='bx bxs-user-badge'></i>
                            <span>Dokumen Penjamin Mutu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.laporan') }}" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span>Laporan Audit Penjamin Mutu</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.monev') }}" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span>Monev Pembelajaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.survei') }}" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span>Survei Kepuasan</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect" aria-expanded="true">
                            <i class="bx bx-layer"></i>
                            <span>RTL dan RTM</span>
                        </a>
                        <ul class="submenu mm-collapse" style="">
                            <li><a href="{{ route('rtl.index') }}" class="bx bxs-file">Laporan RTL</a></li>
                            <li><a href="{{ route('rtm.index') }}" class="bx bxs-file">Laporan RTM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('external.index') }}" class="waves-effect">
                            <i class="bx bxs-file"></i>
                            <span>External Banchmarking</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect">
                            <i class="bx bxs-bar-chart-square"></i>
                            <span>Tentang FKIP UNILA </span>
                        </a>
                        <ul class="submenu mm-collapse">
                            <li><a href="{{ route('profile.index') }}">Profile FKIP UNILA</a></li>
                            <li><a href="{{ route('visi_misi.index') }} ">Visi &amp; Misi FKIP UNILA</a></li>
                            <li><a href="{{ route('jurusan.index') }}">Jurusan dan Program Studi</a></li>
                            <li><a href="back/struktur ">Struktur Organisasi</a></li>
                            <li><a href="back/unit">Unit</a></li>
                            <li><a href="back/berita">Kelola Berita</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('home')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <style type="text/css">
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
                {{-- Alumni --}}
                @yield('alumni')
                {{-- End Alumni --}}

                {{-- Mahasiswa --}}
                @yield('mahasiswa')
                {{-- End Mahasiswa --}}

                {{-- Dosen --}}
                @yield('dosen')
                {{-- End Dosen --}}

                {{-- Pegawai --}}
                @yield('pegawai')
                {{-- End Pegawai --}}

                @yield('main')
                @yield('modal')



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-custom" style="font-weight: 400;">
                            <div class="col-sm-12">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Universitas Lampung
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/jquery/jquery.min.js"></script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/metismenu/metisMenu.min.js">
    </script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/simplebar/simplebar.min.js">
    </script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/node-waves/waves.min.js"></script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net/js/jquery.dataTables.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js">
    </script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/jszip/jszip.min.js"></script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/pdfmake/build/pdfmake.min.js">
    </script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/pdfmake/build/vfs_fonts.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.html5.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.print.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js">
    </script>
    <script
        src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/prettify.js">
    </script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/js/pages/form-wizard.init.js"></script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/js/app.js"></script>
    <script src="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/select2/js/select2.min.js">
    </script>
    <script src="https://codeseven.github.io/toastr/toastr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    @stack('scripts')
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
                        if (formId === 'form-profil' && response.message ===
                            'Data Profile Dosen berhasil disimpan') {
                            toastr.success(message, 'Berhasil');
                        } else {
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
                        success: function(response) {
                            Swal.fire('Success Mereset Password', response.success, 'success');
                        },
                        error: function(error) {
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

    <style>
        #chartdiv,
        #chartdiv2,
        #chartdiv3,
        #chartdiv4 {
            width: 100%;
            height: 400px;
        }
    </style>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script>
        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);
            var chart = am4core.create("chartdiv", am4charts.PieChart);
            chart.logo.disabled = true;
            chart.exporting.menu = new am4core.ExportMenu();

            var title = chart.titles.push(new am4core.Label());
            title.text = "Total Mahasiswa berdasarkan Fakultas";
            title.fontSize = 16;
            title.marginBottom = 10;
            chart.innerRadius = am4core.percent(30);
            chart.legend = new am4charts.Legend();
            chart.data = [{
                    country: "MIPA",
                    litres: 1700,
                },
                {
                    country: "FKIP",
                    litres: 1856,
                },
                {
                    country: "FEB",
                    litres: 1864,
                },
                {
                    country: "KEDOKTERAN",
                    litres: 2888,
                },
            ];
            var pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.colors.step = 3;
            pieSeries.dataFields.value = "litres";
            pieSeries.dataFields.category = "country";
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeOpacity = 1;
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;
            chart.hiddenState.properties.radius = am4core.percent(0);
        });

        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);
            var chart = am4core.create("chartdiv2", am4charts.PieChart);
            chart.logo.disabled = true;
            chart.exporting.menu = new am4core.ExportMenu();

            var title = chart.titles.push(new am4core.Label());
            title.text = "Total Mahasiswa berdasarkan Angkatan";
            title.fontSize = 16;
            title.marginBottom = 10;
            chart.innerRadius = am4core.percent(30);
            chart.legend = new am4charts.Legend();
            chart.data = [{
                    country: "Angkatan 2020",
                    litres: 1959,
                },
                {
                    country: "Angkatan 2021",
                    litres: 2338,
                },
                {
                    country: "Angkatan 2022",
                    litres: 1179,
                },
                {
                    country: "Angkatan 2023",
                    litres: 1447,
                },
            ];
            var pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.colors.step = 3;
            pieSeries.dataFields.value = "litres";
            pieSeries.dataFields.category = "country";
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeOpacity = 1;
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;
            chart.hiddenState.properties.radius = am4core.percent(0);
        });

        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);
            var chart = am4core.create("chartdiv3", am4charts.PieChart);
            chart.logo.disabled = true;
            chart.exporting.menu = new am4core.ExportMenu();

            var title = chart.titles.push(new am4core.Label());
            title.text = "Total Mahasiswa berdasarkan Jenis Kelamin";
            title.fontSize = 16;
            title.marginBottom = 10;
            chart.innerRadius = am4core.percent(30);
            chart.legend = new am4charts.Legend();
            chart.data = [{
                    country: "Laki-laki",
                    litres: 5,
                },
                {
                    country: "Perempuan",
                    litres: 0,
                },
            ];
            var pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.colors.step = 3;
            pieSeries.dataFields.value = "litres";
            pieSeries.dataFields.category = "country";
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeOpacity = 1;
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;
            chart.hiddenState.properties.radius = am4core.percent(0);
        });

        am4core.ready(function() {
            am4core.useTheme(am4themes_animated);
            var chart = am4core.create("chartdiv4", am4charts.PieChart);
            chart.logo.disabled = true;
            chart.exporting.menu = new am4core.ExportMenu();

            var title = chart.titles.push(new am4core.Label());
            title.text = "Tracer Studi Alumni";
            title.fontSize = 16;
            title.marginBottom = 10;
            chart.innerRadius = am4core.percent(30);
            chart.legend = new am4charts.Legend();
            chart.data = [{
                    country: "Pegawai",
                    litres: 10,
                },
                {
                    country: "Swasta",
                    litres: 2903,
                },
                {
                    country: "Wirausaha",
                    litres: 2160,
                },
                {
                    country: "Petani",
                    litres: 2995,
                },
                {
                    country: "Programmer",
                    litres: 2186,
                },
                {
                    country: "Belum bekerja",
                    litres: 214,
                },
            ];
            var pieSeries = chart.series.push(new am4charts.PieSeries());
            pieSeries.colors.step = 3;
            pieSeries.dataFields.value = "litres";
            pieSeries.dataFields.category = "country";
            pieSeries.slices.template.stroke = am4core.color("#fff");
            pieSeries.slices.template.strokeOpacity = 1;
            pieSeries.hiddenState.properties.opacity = 1;
            pieSeries.hiddenState.properties.endAngle = -90;
            pieSeries.hiddenState.properties.startAngle = -90;
            chart.hiddenState.properties.radius = am4core.percent(0);
        });
    </script>

    {{-- Alumni --}}
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
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
                }
            });
        });
    </script>
    {{-- End Alumni --}}

    {{-- Mahasiswa Js --}}
    <script>
        function deleteMahasiswa(url) {
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


    <script>
        function showDetails(id) {
            window.location.href = "/mahasiswa/details/" + id;
        }
    </script>


    <script>
        function edits(id) {
            window.location.href = "/mahasiswa/edit/" + id;
        }
    </script>
    <script>
        var table;
        $(document).ready(function() {
            table = $('#table').DataTable({
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
            })
        });
    </script>


    <script>
        var table;
        $(document).ready(function() {
            table = $('#table-all').DataTable({
                lengthMenu: [
                    [10, 50, 100, -1],
                    [10, 50, 100, 'Semua'],
                ],
                stateSave: true,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Masukan pencarian...',
                    infoEmpty: "Tidak ada data yang tersedia",
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
            })
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

    <script>
        function back() {
            Swal.fire({
                title: "Keluar dari Form",
                text: "Anda akan kehilangan data yang belum tersimpan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#ea1c18",
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                closeOnConfirm: false,
                closeOnCancel: true
            }).then((result) => {
                if (result.value) {
                    window.location.href = '{{ route('mahasiswa') }}';
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#form-main').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('inputdata') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.message === 'Data 1') {
                            $('#form-second').show();
                            toastr.success('Data Berhasil disimpan', 'Berhasil')
                        } else {
                            toastr.error('Data Mahasiswa tidak boleh sama', 'Gagal')
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

        $(document).ready(function() {
            $('#form-info').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('inputmahasiswa') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.message === 'Data 2') {
                            toastr.success('Data Berhasil disimpan', 'Berhasil')
                        } else {
                            toastr.error('Data Informasi Umum tidak boleh sama!', 'Gagal')
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

        $(document).ready(function() {
            $('#form-domisili').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('inputdomisili') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.message === 'Data 3') {
                            toastr.success('Data Berhasil disimpan', 'Berhasil')
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

        $(document).ready(function() {
            $('#form-ortu').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('inputortu') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.message === 'Data 4') {
                            toastr.success('Data Berhasil disimpan', 'Berhasil')
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

        $(document).ready(function() {
            $('#form-wali').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('inputwali') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.message === 'Data 5') {
                            toastr.success('Data Berhasil disimpan', 'Berhasil')
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



        $(document).ready(function() {
            $('#form-sekolah').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{ route('inputsekolah') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.message === 'Data 6') {
                            toastr.success('Data Berhasil disimpan', 'Berhasil')
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

    {{-- Modal Details Dosen --}}

    <script>
        $(document).ready(function() {

            var id = $('#id').val()
            // detail_dosen();

            $('#btn-edit-profil').click(function(e) {
                e.preventDefault();

                $('.dosen_editor').removeAttr('hidden');
                $('.label_dosen').attr('hidden', 'hidden');
                $('#btn-selesai').removeClass('d-none');
                $('#btn-edit-profil').hide();

            });
        })

        $(document).ready(function() {
            $('.btn-open-modal').click(function() {
                var id = $(this).data('id');

                $.ajax({
                    url: '/modal-popout/' + id + '/pasfoto',
                    type: 'GET',
                    success: function(response) {
                        $('#modal_content').html(response);
                        $('#modal-popout').modal('show');
                    }
                });
            });
        });
        $('.open-btn-modal-pendidikan').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/pendidikan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-penelitian').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/penelitian';
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

        $('.open-btn-modal-penelitian-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/penelitian';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });


        $('.open-modal-pengabdian').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/pengabdian';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-pengabdian-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/pengabdian';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-penghargaan').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/penghargaan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-penghargaan-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/penghargaan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });


        $('.open-btn-modal-karya').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/karya';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });




        $('.open-btn-modal-kegiatan').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/kegiatan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-kegiatan-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/kegiatan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-karya-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/karyaIlmiah';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });


        $('.open-btn-modal-jurnal').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/jurnal';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });


        $('.open-btn-modal-jurnal-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/jurnal';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-buku').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/buku';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-buku-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/buku';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-jabatan').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/jabatan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-jabatan-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/jabatan';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-organisasi').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/organisasi';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-organisasi-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/organisasi';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-prestasi').click(function() {
            var id = $(this).data('id');
            var url = '/modal-popout/' + id + '/prestasi';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#modal_content').html(response);
                    $('#modal-popout').modal('show');
                }
            });
        });

        $('.open-btn-modal-prestasi-edit').click(function() {
            var id = $(this).data('id');
            var url = '/dosen/edit/' + id + '/prestasi';
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
            table.formJabatan = $('#table-jabatan').DataTable({
                lengthMenu: [
                    [10, 50, 100, -1],
                    [10, 50, 100, 'Semua'],
                ],
                stateSave: true,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Masukan pencarian...',
                    infoEmpty: "Menampilkan 0 data",
                    zeroRecords: "Tidak Ada Data ",
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
                    zeroRecords: "Tidak Ada Data ",
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

            table.formPrestasi = $('#table-prestasi').DataTable({
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



        });
    </script>
    {{-- Settings --}}
    <script>
        function edit_password(id) {
            window.location.href = '/edit-password/' + id;
        }

        function tombol_hapus(id) {
            Swal.fire({
                title: 'Are You Sure?',
                text: "Data Tidak Dapat Dikembalikan !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!, Delete it!.',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/pegawai/destroy/' + id;
                }
            });
        }
    </script>
    <script>
        function tombol_reset(id) {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            Swal.fire({
                title: 'Are you sure?',
                text: "Password akan direset !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes !'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: `/pegawai/reset/` + id,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        success: function(response) {
                            Swal.fire('Success Mereset Password', response.success, 'success');
                        },
                        error: function(error) {
                            Swal.fire('Error', 'Gagal mereset password.', 'error');
                        }
                    });
                }
            });
        }
    </script>
    <script>
        // Js Pegawai

        var table;
        $(document).ready(function() {
            table = $('#table-pegawai').DataTable({
                lengthMenu: [
                    [10, 50, 100, -1],
                    [10, 50, 100, 'Semua'],
                ],
                stateSave: true,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Masukan pencarian...',
                    infoEmpty: "Menampilkan 0 data",
                    zeroRecords: "Data tidak ada",
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

        // Detail

        var table;
        $(document).ready(function() {
            table = $('#table-pendidikan_pegawai').DataTable({
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
            })
        });

        $('#btn-edit-profil-pegawai').click(function(e) {

            e.preventDefault();

            $('.pegawai_editor').removeAttr('hidden');
            $('.label_pegawai').attr('hidden', 'hidden');
            $('#btn-selesai').removeClass('d-none');
            $('#btn-edit-profil-pegawai').hide();





        });
    </script>
    <script>
        function tombol_detail(id) {
            window.location.href = 'pegawai/details/' + id;
        }
        $(document).ready(function() {
            $('.tombol-edit').click(function() {
                var id = $(this).data('id');
                var type = $(this).data('type');
                var url = '/pegawai/details/modal/' + id + '/' + type;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('#modal_content').html(response);
                        $('#modal-popout').modal('show');
                    }
                });
            });
            $('.tombol-hapus').click(function() {
                var id = $(this).data('id');
                var type = $(this).data('type');
                var url = '/pegawai/details/' + id + '/' + type;
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Data ini akan dihapus!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Tidak',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                            success: function(response) {
                                console.log(response);
                                Swal.fire('Berhasil!', response.success, 'success')
                                    .then(() => {
                                        window.location.href = response.redirect;
                                    });
                            },
                            error: function(response) {
                                console.error(response);
                                Swal.fire('Gagal!', 'Terjadi kesalahan.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>

    {{-- IKU ONE --}}

    <script>
        function _form() {
            window.location.href = '/iku/one/form';
        }

        function _edit(id) {
            window.location.href = '/iku/one/edit/a/' + id;
        }

        function _edit_b(id) {
            window.location.href = '/iku/one/edit/b/' + id;
        }

        function _destroy(id) {
            window.location.href = '/iku/one/delete/' + id;
        }
    </script>
    <script type="text/javascript">
        var table;
        $(document).ready(function() {
            var table = $('#table_iku_one').DataTable({
                // Konfigurasi DataTables
                lengthMenu: [
                    [10, 50, 100, -1],
                    [10, 50, 100, 'All'],
                ],
                stateSave: true,
                ordering: true,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Masukan pencarian...',
                    infoEmpty: "Menampilkan 0 data",
                    zeroRecords: "Tidak Ada Data",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
                    lengthMenu: 'Tampilkan: _MENU_',
                    "order": [
                        [1, 'asc']
                    ], // Kolom berapa yang diurutkan secara default (contoh: urutkan berdasarkan kolom kedua secara ascending)
                    "columnDefs": [{
                            "orderable": false,
                            "targets": [0, 4]
                        } // Menonaktifkan pengurutan pada kolom 1 dan 5
                    ],
                    paginate: {
                        'first': 'First',
                        'last': 'Last',
                        'next': '&rarr;',
                        'previous': '&larr;'
                    }
                },
            });

        });

        // Event listener untuk elemen select dengan ID "klasifikasi"
        document.getElementById("klasifikasi").addEventListener("change", function() {
            var selectElement = this; // Mengambil elemen select yang sedang digunakan
            var selectedValue = selectElement.value; // Mengambil nilai yang dipilih

            // Ganti teks yang ditampilkan sesuai dengan nilai yang dipilih
            switch (selectedValue) {
                case "a":
                    ""
                    break;
                case "b":
                    selectElement.options[selectElement.selectedIndex].text = "Lulusan yang Melanjutkan Studi";
                    break;
                case "c":
                    selectElement.options[selectElement.selectedIndex].text = "Lulusan Berwirausaha";
                    break;
                default:
                    break;
            }
        });




        // Function Kategori IKU ONE
        document.addEventListener("DOMContentLoaded", function() {
            const KlasifikasiSelect = document.getElementById("klasifikasi");
            const tableRow = document.querySelectorAll("#table_iku_one tbody tr");

            let nomorUrutanA = 1;
            let nomorUrutanB = 1;
            let nomorUrutanC = 1;

            KlasifikasiSelect.addEventListener("change", function() {
                const selectedValue = KlasifikasiSelect.value;

                tableRow.forEach((row) => {
                    row.style.display = "none";
                });


                nomorUrutanA = 1;
                nomorUrutanB = 1;
                nomorUrutanC = 1;

                tableRow.forEach((row) => {
                    const dataKlasifikasi = row.getAttribute("data-klasifikasi");

                    if (dataKlasifikasi === selectedValue) {
                        row.style.display = "";

                        switch (selectedValue) {
                            case "a":
                                row.querySelector("th").textContent = nomorUrutanA++;
                                break;
                            case "b":
                                row.querySelector("th").textContent = nomorUrutanB++;
                                break;
                            case "c":
                                row.querySelector("th").textContent = nomorUrutanC++;
                                break;
                        }
                    }
                })
            });

            KlasifikasiSelect.dispatchEvent(new Event("change"));
        });
    </script>



    {{-- Dokumen Penjamin Mutu --}}


    <script>
        $(document).ready(function() {
            $('.modal-edit').click(function() {
                var id = $(this).data('id');
                var type = $(this).data('type');
                var url = '/dokumen_mutu/modal/get/' + id + '/' + type;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('#modal_content').html(response);
                        $('#modal-popout').modal('show');
                    }
                });
            });
        });
    </script>
    {{-- Laporan Audit --}}

    <script>
        function detailsButtonLaporan(id) {
            window.location.href = '/laporan_audit/detail/' + id;
        }
    </script>

    <script>
        var table;
        $(document).ready(function() {
            table = $('#table').DataTable({
                lengthMenu: [
                    [10, 50, 100, -1],
                    [10, 50, 100, 'Semua'],
                ],
                stateSave: true,
                language: {
                    search: '<span>Cari:</span> _INPUT_',
                    searchPlaceholder: 'Masukkan pencarian...',
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
                },
                ajax: {
                    url: 'https://egov.phicos.co.id/lampung/unila/back/monev/data',
                    type: 'post',
                    dataType: 'json',
                },
                columns: [{
                    data: 'no',
                    render: (data) => {
                        return data + '.';
                    }
                }, {
                    data: 'prodi'
                }, {
                    data: 'semester'
                }, {
                    data: 'periode'
                }, {
                    data: 'tahun_ajaran'
                }, {
                    data: 'id',
                    render: (data, type, row) => {
                        if (type === 'display') {
                            const button_edit = $('<button>', {
                                class: 'btn btn-primary btn-edit',
                                html: '<i class="bx bx-edit" ></i>',
                                'data-id': data,
                                title: 'Ubah Data',
                                'data-placement': 'top',
                                'data-toggle': 'tooltip'
                            });

                            const button_delete = $('<button>', {
                                class: 'btn btn-danger btn-delete',
                                html: '<i class="bx bxs-trash"></i>',
                                'data-id': data,
                                title: 'Hapus Data',
                                'data-placement': 'top',
                                'data-toggle': 'tooltip'
                            });

                            const button_group = $('<div>', {
                                class: 'btn-group',
                                html: [button_edit, button_delete]
                            });

                            return $('<div>', {
                                class: 'text-center',
                                html: button_group
                            }).prop('outerHTML');
                        }
                        return data;
                    }
                }]
            }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
        });
    </script>


    {{-- MONEV --}}

    <script>
        $(document).ready(function() {
            $('.tombol-edit-monev').click(function() {
                var id = $(this).data('id');
                var url = '/monev/modal/' + id;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('.modal-content').html(response);
                        $('#modal-popout').modal('show');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.tombol-edit-survei').click(function() {
                var id = $(this).data('id');
                var url = '/survei/modal/' + id;
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('.modal-content').html(response);
                        $('#modal-popout-survei').modal('show');
                    }
                });
            });
        });
    </script>

    {{-- LAPORAN RTL RTM --}}

    <script></script>
</body>

</html>
