
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <base href="https://egov.phicos.co.id/lampung/unila/">
    <title>Alumni | Unila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content='Unila' />
    <meta name='author' content='unila' />
    <meta name='keywords' content='Unila'>
    <link rel="apple-touch-icon" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    <link rel="shortcut icon" type="image/x-icon/png" href="https://egov.phicos.co.id/lampung/unila/assets/img/logo_unila.png">
    {{-- <base href="https://egov.phicos.co.id/lampung/unila/"> --}}
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

        .btn_template {
            height: 40px;
            font-size: 13px;
            color: white;
            padding: 20px auto;
            width: 40%;
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
                        <a class="dropdown-item text-danger" onclick="logout()"><i class="bi bi-power font-size-16 align-middle mr-1 text-danger"></i> <span key="t-logout">Logout</span></a>
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
                    <a href="{{ route('alumni') }}" class="waves-effect active">
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
        <div class="container-fluid"><style type="text/css">
   .inline{
      display: inline-block;
   }
   .vtop{
      vertical-align: top;
   }
   .line-through{
      text-decoration: line-through;
   }
</style>
@if(session('warning_database'))
    <div class="alert alert-danger">
        {{ session('warning_database') }}
    </div>
@endif
@if (session('message_success'))
<div class="alert alert-success">
    {{ session('message_success') }}
</div>
@endif
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header py-3">
            <h4 class="card-title mb-0 text-dark">Data Alumni</h4>
            <div class="toolbar">
               <button type="button" data-toggle="modal" data-target="#modal-popout" onclick="do_import()" class="btn btn-primary "><i class="bi bi-plus-lg"></i> Import Data</button>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="myTable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead style="background-color: #F1F1F1;">
                      <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Progam Studi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $id = 1;
                        @endphp
                        @foreach ($data as $row)
                        <tr>
                            <th class="text-center">{{ $id++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nik }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->progam_studi }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade " id="modal-popout" role="dialog">
   <div class="modal-dialog  modal-dialog-popout">
        <div class="modal-content ">
            <div id="content_modal">

                    <div class="modal-header border bg-primary">
                        <div class="modal-title text-light">
                            <h5>Form Input Alumni</h5>
                        </div>
                        <button type="button" class="btn-close" style="bg-transparent"  data-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('importexcel') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <p class="text-secondary-emphasis fw-medium">Template<label class="text-danger">*</label></p>
                                <a href="https://www.mediafire.com/file/1kwtfqflcvin4j3/Buku+3.xlsx/file" class=" btn btn-primary border border-0 rounded-3">Download Template Excel</a>
                            </div>
                            <div class="form-group">
                                <label for="file">Upload File Import</label>
                                <div class="card-body border p-2">
                                    <input type="file" name="file" id="file" required>
                                </div>
                                <label class="text-danger" style="font-size: 13px">*Max 5MB (xlsx)</label>
                            </div>
                            <div class="form-group">
                                <label for="periode">Pilih Periode kelulusan</label>
                                <select class="form-select" name="periode" id="periode" aria-label="Default select example">
                                    <option selected disabled>Pilih Periode kelulusan</option>
                                    <option value="1">Periode 1</option>
                                    <option value="2">Periode 2</option>
                                    <option value="3">Periode 3</option>
                                    <option value="4">Periode 4</option>
                                    <option value="5">Periode 5</option>
                                    <option value="6">Periode 6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tahun_kelulusan">Tahun Kelulusan</label>
                                <input class="w-100 p-2 rounded-3" type="text" name="tahun_kelulusan" id="tahun_kelulusan" placeholder="Masukkan Tahun Kelulusan">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>



            </div>
        </div>
      </div>
    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
<script>
    toastr.options = {
            "positionClass": "toast-top-right",
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
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


</body>

</html>