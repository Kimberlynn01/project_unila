
@extends('layout.main')
@section('modal')
@include('pegawai.modal.foto')
@include('pegawai.modal.pendidikan')
@include('pegawai.modal.penghargaan')
@include('pegawai.modal.karya_ilmiah')
@include('pegawai.modal.kegiatan')
@include('pegawai.modal.jurnal')
@include('pegawai.modal.buku')
@include('pegawai.modal.jabatan')
@include('pegawai.modal.organisasi')
@include('pegawai.modal.prestasi')
@endsection
@section('main')
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h3 class="text-primary"><strong><u>Profil Pegawai</u></strong></h3>
        <div class="d-flex mb-3 justify-content-end">
            <form action="{{ route('pegawai.detail.store', ['id' => $pegawai->id]) }}" method="post">
                @csrf
                    <div class="me-auto p-2">
                    </div>
                    <div class="p-2">
                        <button type="submit" id="btn-edit-profil-pegawai" class="btn btn-primary">Edit Profil</button>
                        <button type="submit" id="btn-selesai" class="btn btn-success d-none">Selesai</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ $fileUrl }}" alt="" class="img-thumbnail">
                        <br>
                        <button type="button" style="width: 100%;" class="btn btn-primary" data-toggle="modal" data-target="#modal-foto">Ganti
                            Foto</button>
                    </div>
                    <div class="col-9">
                        {{-- <input type="hidden" name="id_pegawai" id="id_pegawai" value="3"> --}}
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Nama Lengkap</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->nama_pegawai) {{ $pegawai->nama_pegawai }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" value="@if ($pegawai->nama_pegawai){{ $pegawai->nama_pegawai }} @else- @endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>NIK KTP</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->nik) {{ $pegawai->nik }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="nik" id="nik" value="@if ($pegawai->nik){{ $pegawai->nik }} @else- @endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>NIP/NIK</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->nip) {{ $pegawai->nip }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="nip_pegawai" id="nip_pegawai" value="@if ($pegawai->nip){{ $pegawai->nip }} @else- @endif"> </div>
                        </div>
                        {{-- <div hidden="" class="row mb-3">
                            <div class="col-md-4"><strong>NIDN</strong></div>
                            <div class="col-md-8 label_pegawai">: 1222413</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="nidn" id="nidn" value="1222413">
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Tempat, tgl. Lahir</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->ttl) {{ $pegawai->ttl }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="ttl" id="ttl" value="@if ($pegawai->ttl){{ $pegawai->ttl }} @else- @endif"> </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Jenis Kelamin</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->jenis_kelamin){{ $pegawai->jenis_kelamin }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="" selected="" disabled="">-- Pilih Jenis Kelamin --</option>
                                    <option {{ $pegawai->jenis_kelamin === 'Laki-Laki' ? 'selected' : '' }} value="Laki-Laki">Laki-laki</option>
                                    <option {{ $pegawai->jenis_kelamin === 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Unit Kerja</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->unit_kerja) {{ $pegawai->unit_kerja }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="unit_kerja" id="unit_kerja" value="@if ($pegawai->unit_kerja){{ $pegawai->unit_kerja }}@else-@endif"> </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Email</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->email) {{ $pegawai->email }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="email" id="email_pegawai" value="@if ($pegawai->email){{ $pegawai->email }}@else-@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Website</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->website) {{ $pegawai->website }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="website" id="website_pegawai" value="@if ($pegawai->website){{ $pegawai->website }}@else-@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Keahlian</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->keahlian) {{ $pegawai->keahlian }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="keahlian" id="keahlian" value="@if ($pegawai->keahlian){{ $pegawai->keahlian }}@else-@endif"> </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Pangkat/Golongan <small class="text-danger">(Terakhir)</small></strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->pangkat) {{ $pegawai->pangkat }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="pangkat" id="golongan_pangkat" value="@if ($pegawai->pangkat){{ $pegawai->pangkat }}@else-@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Judul Skripsi</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->judul_skripsi) {{ $pegawai->judul_skripsi }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="judul_skripsi" id="judul_skripsi" value="@if ($pegawai->judul_skripsi){{ $pegawai->judul_skripsi }}@else-@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Judul Tesis</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->judul_tesis) {{ $pegawai->judul_tesis }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="judul_tesis" id="judul_tesis" value="@if ($pegawai->judul_tesis){{ $pegawai->judul_tesis }}@else-@endif"> </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>Judul Desertasi</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->judul_desertasi) {{ $pegawai->judul_desertasi }} @else - @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="judul_desertasi" id="judul_desertasi" value="@if ($pegawai->judul_desertasi){{ $pegawai->judul_desertasi }}@else-@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4"><strong>No. HP</strong></div>
                            <div class="col-md-8 label_pegawai">: @if ($pegawai->no_hp) {{ $pegawai->no_hp }} @else -  @endif</div>
                            <div hidden="" class="col-md-8 pegawai_editor"><input type="text" class="form-control" name="no_hp" id="no_hp" value="@if ($pegawai->no_hp){{ $pegawai->no_hp }}@else-@endif">
                            </div>
                        </div>
                    </div>
            </form>
        </div>

        <hr>
        <div id="content_pegawai">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-pendidikan-tab" data-toggle="pill" href="#pills-pendidikan" role="tab" aria-controls="pills-pendidikan" aria-selected="true">Pendidikan</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Penelitian</a>
                </li>
                <li class="nav-item" style="display: none;">
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
                        <button type="button" data-toggle="modal" data-target="#tambah_pendidikan"  class="btn btn-success mb-3 ">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-pendidikan_pegawai">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Universitas</th>
                                    <th>Fakultas</th>
                                    <th>Prodi</th>
                                    <th>Jenjang</th>
                                    <th>Tahun Lulus</th>
                                    <th></th>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($pendidikan as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->universitas }}</td>
                                    <td>{{ $row->fakultas }}</td>
                                    <td>{{ $row->progam_studi }}</td>
                                    <td>{{ $row->jenjang_pendidikan }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td>
                                        <div class="btn-group">
                                            @if (isset($row))
                                            <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="pendidikan_edit" title="ID {{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            @endif
                                            <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="pendidikan" title="ID {{ $row->id }}">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pendidikan Tab End Here -->

                {{-- <!-- Penelitian Tab Start Here -->
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="display: none;">
                    <div class="d-flex justify-content-end">
                        <button type="button" id="btn-tambah_penelitian" class="btn btn-success mb-3" >Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table>

                        </table>
                    </div>
                </div>
                <!-- Penelitian Tab End Here -->

                <!-- Tab Pengabdian Start Here -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="display: none;">
                    <div class="d-flex justify-content-end">
                        <button type="button" id="btn-tambah_pengabdian" class="btn btn-success mb-3 ">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                    </div>
                </div>
                <!-- Tab Pengabdian End Here --> --}}

                <!-- Tab Penghargaan Start Here -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="d-flex justify-content-end">
                        <button type="button" id="btn-tambah_penghargaan" class="btn btn-success mb-3 " data-toggle="modal" data-target="#tambah_penghargaan">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-penghargaan">
                            <thead>
                                <th>No.</th>
                                <th>Nama Penghargaan</th>
                                <th>Tahun</th>
                                <th>Institusi</th>
                                <th>kategori</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($penghargaan_pegawai as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->penghargaan }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td>{{ $row->institusi }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td class="d-flex justify-content-center">
                                        @if ($row->id)
                                            <div class="btn-group">
                                                <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="penghargaan_edit" title="ID {{ $row->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="penghargaan" title="ID {{ $row->id }}">
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
                <!-- Tab Penghargaan End Here -->

                <!-- Tab Kara Ilmiah Start Here -->
                <div class="tab-pane fade" id="pills-karya_ilmiah" role="tabpanel" aria-labelledby="pills-karya_ilmiah-tab">
                    <div class="d-flex justify-content-end">
                        <button type="button" id="btn-tambah_karya_ilmiah" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambah_karya_ilmiah">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive" >
                        <table id="table-karya_ilmiah" class="table table-striped">
                            <thead>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Jenis</th>
                                <th>Kategori</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($karya_pegawai as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td>{{ $row->jenis }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td class="d-flex justify-content-center">
                                        @if ($row->id)
                                            <div class="btn-group">
                                                <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="karya_ilmiah_edit" title="ID {{ $row->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="karya_ilmiah" title="ID {{ $row->id }}">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
                                            </div>
                                        @endif
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
                        <button type="button" id="btn-tambah_kegiatan" class="btn btn-success mb-3 " data-toggle="modal" data-target="#tambah_kegiatan">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped" id="table-kegiatan">
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
                                <?php $no = 1; ?>
                                @foreach ($kegiatan_pegawai as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->kegiatan }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td>{{ $row->peranan }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="kegiatan_edit" title="ID {{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="kegiatan" title="ID {{ $row->id }}">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
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
                        <button type="button" id="btn-tambah_jurnal" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambah_jurnal">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped" id="table-jurnal">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
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
                                @foreach ($jurnal_pegawai as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->judul_jurnal }}</td>
                                    <td>{{ $row->nama_jurnal }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td>{{ $row->volume }}</td>
                                    <td>{{ $row->no_registrasi }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="jurnal_edit" title="ID {{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="jurnal" title="ID {{ $row->id }}">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
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
                        <button type="button" id="btn-tambah_buku" class="btn btn-success mb-3 " data-toggle="modal" data-target="#tambah_buku">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped" id="table-buku">
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
                                <?php $no = 1 ;?>
                                @foreach ($buku_pegawai as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->judul_buku }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->isbn }}</td>
                                        <td>{{ $row->penerbit }}</td>
                                        <td>{{ $row->kategori }}</td>
                                        <td class="d-flex justify-content-center">
                                            <div class="btn-group">
                                                <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="buku_edit" title="ID {{ $row->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="buku" title="ID {{ $row->id }}">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </button>
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
                        <button type="button" id="btn-tambah_jabatan" class="btn btn-success mb-3 " data-toggle="modal" data-target="#tambah_jabatan">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped" id="table-jabatan">
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
                                <?php $no = 1 ?>
                                @foreach ($jabatan_pegawai as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->jabatan }}</td>
                                    <td>{{ $row->institusi }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="jabatan_edit" title="ID {{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="jabatan" title="ID {{ $row->id }}">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </div>
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
                        <button type="button" id="btn-tambah_organisasi" class="btn btn-success mb-3 " data-toggle="modal" data-target="#tambah_organisasi">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped" id="table-organisasi">
                            <thead>
                                <th>No.</th>
                                <th>Organisasi</th>
                                <th>Institusi</th>
                                <th>Tahun</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($organisasi_pegawai as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->organisasi }}</td>
                                    <td>{{ $row->institusi }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="organisasi_edit" title="ID {{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="organisasi" title="ID {{ $row->id }}">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Tab Organisasi End Here -->
                <!-- Tab prestasi Start Here -->
                <div class="tab-pane fade" id="pills-prestasi" role="tabpanel" aria-labelledby="pills-prestasi-tab">
                    <div class="d-flex justify-content-end">
                        <button type="button" id="btn-tambah_prestasi" class="btn btn-success mb-3 " data-toggle="modal" data-target="#tambah_prestasi">Tambah
                            Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-stripped" id="table-prestasi">
                            <thead>
                                <th>No.</th>
                                <th>Prestasi</th>
                                <th>Keterangan</th>
                                <th>Tahun</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($prestasi_pegawai as $row)
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->prestasi }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    <td>{{ $row->tahun }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="btn-group">
                                            <button class="btn btn-primary tombol-edit" data-id="{{ $row->id }}" data-type="prestasi_edit" title="ID {{ $row->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button class="btn btn-danger tombol-hapus" data-id="{{ $row->id }}" data-type="prestasi" title="ID {{ $row->id }}">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Tab prestasi End Here -->
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


