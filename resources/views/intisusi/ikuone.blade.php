<html lang="en"><head>
    <meta charset="utf-8">
    <title>IKU 1 | Unila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unila">
    <meta name="author" content="unila">
    <meta name="keywords" content="Unila">
    <link rel="apple-touch-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="shortcut icon" type="image/x-icon/png" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">

    <link rel="stylesheet" href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/twitter-bootstrap-wizard/prettify.css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
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
        #table_iku_one {
            font-size: 13px;
        }

    </style>


<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>

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
    <div data-simplebar="init" class="h-100"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: -20px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; padding-right: 20px; padding-bottom: 0px; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
        <div id="sidebar-menu" class="mm-active">
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
    </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 1404px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 375px; transform: translate3d(0px, 168px, 0px); display: block;"></div></div></div>
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

   <div class="col-12">
      @if (session('message_error'))
        <div class="alert alert-danger">
            {{ session('message_error') }}
        </div>
      @endif
      @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
      @endif
      <div class="card">
         <div class="card-header py-3">
            <h4 class="card-title mb-0 text-dark">IKU 1</h4>

            <div class="toolbar">
               <button type="button" data-toggle="modal" data-target="#modal-popout" class="btn btn-success "><i class="fa fa-download"></i> Import Data</button>
               <button type="button" data-toggle="modal" onclick="_form()" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah Data</button>
            </div>
         </div>
         <div class="card-body">
            <label for="klasifikasi">
               <p color="red">Sub Klasifikasi</p>
            </label>
            <select class="form-control col-12" id="klasifikasi" name="klasifikasi">
               <option value="a" >Lulusan mendapatkan pekerjaan yang layak (masa tunggu &lt;6 bulan)</option>
               <option value="b">Lulusan yang Melanjutkan Studi</option>
               <option value="c">Lulusan Berwirausaha</option>
            </select>
            <br>
            <div class="table-responsive">
                <table class="display table table-bordered dataTable no-footer" id="table_iku_one" style="border-collapse: collapse; border-spacing: 0px; width: 0%;" >
                  <thead style="background-color: #F1F1F1;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Prodi</th>
                        <th>Fakultas</th>
                        <th>No Ijazah</th>
                        <th>Masa Tunggu</th>
                        <th>Nama Perusahaan</th>
                        <th>Provinsi</th>
                        <th>Gaji</th>
                        <th>Nama/Bidang Usaha</th>
                        <th>Pendapatan</th>
                        <th>Tempa</th>
                        <th>Melanjutkan Studi Jenjang</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php $no = 1; ?>
                    <tbody>

                        @foreach ($ikuOne as $row)
                        <tr data-klasifikasi="a">
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->npm }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->ijasah }}</td>
                            <td>{{ $row->masa_tggu }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->gaji }}</td>
                            <td>{{ $row->usaha }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->tempa }}</td>
                            <td>{{ $row->jenjang }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="p-2 btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="p-2 btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @foreach ($ikuOneb as $row)
                        <tr data-klasifikasi="b">
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->npm }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->ijasah }}</td>
                            <td>{{ $row->masa_tggu }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->gaji }}</td>
                            <td>{{ $row->usaha }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->tempa }}</td>
                            <td>{{ $row->jenjang }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="p-2 btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="p-2 btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @foreach ($ikuOneC as $row)
                        <tr data-klasifikasi="c">
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->npm }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->ijasah }}</td>
                            <td>{{ $row->masa_tggu }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->gaji }}</td>
                            <td>{{ $row->usaha }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->tempa }}</td>
                            <td>{{ $row->jenjang }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="p-2 btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="p-2 btn btn-danger"><i class="fa fa-trash"></i></button>
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

<form action="{{ route('iku.one.import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modal-popout" role="dialog">
        <div class="modal-dialog modal-dialog-popout">
           <div class="modal-content">
              <div id="content_modal">
                 <div class="modal-header bg-primary">
                     <div class="modal-title">
                         <h3 class="text-light">Import Data Mahasiswa</h3>
                     </div>
                     <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body fw-bold">
                     <h6>Template <label for="template" style="color: red">*</label></h6>
                     <a href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/excel/iku1.xlsx" class="text-light bg-primary" style="padding: 10px; border-radius: 10px">Download Template Excel</a>
                     <br>
                     <label for="input" class="mt-4">Upload File Import</label>
                     <input type="file" id="file" accept=".xlsx" name="file" class="form-control" style="border: solid 1px rgba(114, 114, 114, 0.281);" required>
                     <label for="input" style="color: red; font-weight: 400">*Max 5Mb (xlsx)</label>
                     <br>
                     <h6 class="mt-2">Sub Klasifikasi</h6>
                     <select class="form-control col-12" id="klasifikasi" name="klasifikasi">
                         <option value="a" selected>Lulusan mendapatkan pekerjaan yang layak (masa tunggu &lt;6 bulan)</option>
                         <option value="b">Lulusan yang Melanjutkan Studi</option>
                         <option value="c">Lulusan Berwirausaha</option>
                      </select>
                 </div>
                 <div class="modal-footer">
                     <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                     <button type="submit" class="btn btn-primary">Import</button>
                 </div>
             </div>
           </div>
        </div>
     </div>
</form>
<footer class="footer">
	<div class="container-fluid">
		<div class="row text-custom" style="font-weight: 400;">
			<div class="col-sm-12">
				© <script>
					document.write(new Date().getFullYear())
				</script>2023 Universitas Lampung
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
				// infoFiltered: "(disaring dari _MAX_ data keseluruhan)",
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
            "order": [[1, 'asc']], // Kolom berapa yang diurutkan secara default (contoh: urutkan berdasarkan kolom kedua secara ascending)
            "columnDefs": [
                { "orderable": false, "targets": [0, 4] } // Menonaktifkan pengurutan pada kolom 1 dan 5
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


    // Function Kategori IKU ONE
    document.addEventListener("DOMContentLoaded", function () {
        const KlasifikasiSelect = document.getElementById("klasifikasi");
        const tableRow = document.querySelectorAll("#table_iku_one tbody tr");

        let nomorUrutanA = 1;
        let nomorUrutanB = 1;
        let nomorUrutanC = 1;

        KlasifikasiSelect.addEventListener("change", function () {
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



</body>
</html>
