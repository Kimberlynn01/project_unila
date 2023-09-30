@extends('layout.main')
@section('dosen')

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
                                <div hidden class="col-md-8 dosen_editor"><input type="prodi" class="form-control" name="id_prodi" id="prodi" value="@if($dosen_profile->pendidikan_dosen){{$dosen_profile->id_prodi}}@endif"></div>
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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-prestasi" role="tab" aria-controls="pills-prestasi" aria-selected="false">Prestasi</a>
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
                                                <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'pendidikan']) }}')">
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
                            <button type="button" id="btn-tambah_penelitian" class="open-btn-modal-penelitian btn btn-success mb-3 " data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                                    <button type="submit" class="btn btn-primary  open-btn-modal-penelitian-edit" data-id="{{ $penelitian->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    @if ($penelitian)
                                                        <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $penelitian->id, 'type' => 'penelitian']) }}')">
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
                            <button type="button" id="btn-tambah_pengabdian" class="btn btn-success mb-3 open-modal-pengabdian" data-id="{{ $dosen_profile->id }}" >Tambah Data</button>
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
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dosen_pengabdian as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->judul_pengabdian }}</td>
                                        <td>{{ $row->jabatan }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->sumber_dana }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <th>
                                            <div class="btn-group">
                                               @if ($row)
                                                    <button type="submit" class="btn btn-primary  open-btn-modal-pengabdian-edit" data-id="{{ $row->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                               @endif
                                                @if ($row)
                                                    <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'pengabdian']) }}')">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </button>
                                                @endif
                                            </div>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Pengabdian End Here -->

                    <!-- Tab Penghargaan Start Here -->
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_penghargaan" class="open-btn-modal-penghargaan btn btn-success mb-3" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dosen_penghargaan as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->nama_penghargaan }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->institusi }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-primary  open-btn-modal-penghargaan-edit" data-id="{{ $row->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                @if ($row)
                                                    <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'penghargaan']) }}')">
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
                    <!-- Tab Penghargaan End Here -->

                    <!-- Tab Kara Ilmiah Start Here -->
                    <div class="tab-pane fade" id="pills-karya_ilmiah" role="tabpanel" aria-labelledby="pills-karya_ilmiah-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_karya_ilmiah" class="btn btn-success mb-3 open-btn-modal-karya" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                    <?php $no = 1; ?>

                                    @foreach ($dosen_karyaIlmiah as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->judul_karya_ilmiah }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->jenis }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <td class="d-flex justify-content-center">
                                            <div class="btn-group">

                                                @if ($row->id)
                                                    <button type="submit" class="btn btn-primary  open-btn-modal-karya-edit" data-id="{{ $row->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="submit" class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'karyailmiah']) }}')">
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
                    <!-- Tab Kara Ilmiah End Here -->

                    <!-- Tab Kegiatan Start Here -->
                    <div class="tab-pane fade" id="pills-kegiatan" role="tabpanel" aria-labelledby="pills-kegiatan-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_kegiatan" class="btn btn-success mb-3 open-btn-modal-kegiatan" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                <tbody>
                                    <?php $no = 1 ?>

                                    @foreach ($dosen_kegiatan as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->kegiatan }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->peranan }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <td class="d-flex justify-content-center">
                                            <div class="btn-group">
                                               @if ($row->id)
                                                    <div class="btn btn-primary open-btn-modal-kegiatan-edit" data-id="{{ $row->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </div>

                                                    <div class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'kegiatan']) }}')">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </div>
                                               @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Kegiatan End Here -->

                    <!-- Tab Jurnal Start Here -->
                    <div class="tab-pane fade" id="pills-jurnal" role="tabpanel" aria-labelledby="pills-jurnal-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_jurnal" class="btn btn-success mb-3 open-btn-modal-jurnal" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($dosen_jurnal as $row)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $row->judul_jurnal }}</td>
                                            <td>{{ $row->nama_jurnal }}</td>
                                            <td>{{ $row->tahun }}</td>
                                            <td>{{ $row->volume }}</td>
                                            <td>{{ $row->no_registrasi }}</td>
                                            <td>{{ $row->kategori }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if ($row->id)
                                                        <button class="btn btn-primary open-btn-modal-jurnal-edit" data-id="{{ $row->id }}">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <button class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'jurnal']) }}')">
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
                    <!-- Tab Jurnal End Here -->

                    <!-- Tab Buku Start Here -->
                    <div class="tab-pane fade" id="pills-buku" role="tabpanel" aria-labelledby="pills-buku-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_buku" class="btn btn-success mb-3 open-btn-modal-buku" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                <tbody>
                                    <?php $no = 1 ?>
                                    @foreach ($dosen_buku as $row)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $row->judul_buku }}</td>
                                            <td>{{ $row->tahun }}</td>
                                            <td>{{ $row->isbn }}</td>
                                            <td>{{ $row->penerbit }}</td>
                                            <td>{{ $row->kategori }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    @if ($row->id)
                                                        <button type="submit" class="btn btn-primary open-btn-modal-buku-edit" data-id="{{ $row->id }}">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <button class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'buku']) }}')">
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
                    <!-- Tab Buku End Here -->

                    <!-- Tab Jabatan Start Here -->
                    <div class="tab-pane fade" id="pills-jabatan" role="tabpanel" aria-labelledby="pills-jabatan-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_jabatan" class="btn btn-success mb-3 open-btn-modal-jabatan" data-id="{{ $dosen_profile->id }}">Tambah Data</button>
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
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($dosen_jabatan as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->jabatan }}</td>
                                        <td>{{ $row->institusi }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td class="d-flex justify-content-center ">
                                            @if ($row->id)
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary open-btn-modal-jabatan-edit" data-id="{{ $row->id }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'jabatan']) }}')">
                                                        <i class="bi bi-trash3-fill"></i>
                                                    </button>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Jabatan End Here -->

                    <!-- Tab Organisasi Start Here -->
                    <div class="tab-pane fade" id="pills-organisasi" role="tabpanel" aria-labelledby="pills-organisasi-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="btn-tambah_organisasi" class="btn btn-success mb-3 open-btn-modal-organisasi" data-id="{{ $dosen_profile->id }} ">Tambah Data</button>
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
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($dosen_organisasi as $row)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $row->organisasi }}</td>
                                            <td>{{ $row->institusi }}</td>
                                            <td>{{ $row->tahun }}</td>
                                            <td class="d-flex justify-content-center ">
                                                @if ($row->id)
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary open-btn-modal-organisasi-edit" data-id="{{ $row->id }}">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <button class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'organisasi']) }}')">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </button>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Organisasi End Here -->

                    <!-- Tab Prestasi Start Here -->
                    <div class="tab-pane fade" id="pills-prestasi" role="tabpanel" aria-labelledby="pills-prestasi-tab">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-success mb-3 open-btn-modal-prestasi" data-id="{{ $dosen_profile->id }} ">Tambah Data</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="table-prestasi" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Prestasi</th>
                                        <th>Keterangan</th>
                                        <th>Tahun</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($dosen_prestasi as $row)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $row->prestasi }}</td>
                                            <td>{{ $row->keterangan }}</td>
                                            <td>{{ $row->tahun }}</td>
                                            <td class="d-flex justify-content-center ">
                                                @if ($row->id)
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary open-btn-modal-prestasi-edit" data-id="{{ $row->id }}">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </button>
                                                        <button class="btn btn-danger" onclick="DeleteDetails('{{ route('dosen.delete', ['id' => $row->id, 'type' => 'prestasi']) }}')">
                                                            <i class="bi bi-trash3-fill"></i>
                                                        </button>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Tab Prestasi End Here -->

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

@endsection
