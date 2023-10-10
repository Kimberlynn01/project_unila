@extends('layout.main')

@section('pegawai')

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
        Data Pegawai
        <div class="toolbar">
            <button type="button" data-toggle="modal" data-target="#modal-popout" class="btn btn-light "><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
    </div>

    <div class="modal fade" id="modal-popout" tabindex="-1" style="z-index: 9999">
        <div class="modal-dialog modal-dialog-popout modal-xl">
            <form action="{{ route('store.pegawai') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2>Menambah Data Pegawai</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">x</button>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-primary"><u>Profil Pegawai</u></h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">NIP/NIK</label>
                                <input type="text" name="nip" class="form-control" placeholder="NIP">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Tempat Tgl. Lahir</label>
                                <input type="text" name="ttl" class="form-control" placeholder="Tempat Tgl. Lahir">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option selected value="Laki-Laki">-- Pilih Kelamin --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="example@example">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Website</label>
                                <input type="text" name="website" class="form-control" placeholder="Website">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Keahlian</label>
                                <input type="text" name="keahlian" class="form-control" placeholder="Keahlian">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label class="form-label">Pas Foto</label>
                                <input type="file" name="foto" class="form-control" accept=".jpeg,.jpg,.gif,.png">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="table-pegawai">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Tempat Tgl. Lahir</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($pegawai as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama_pegawai }}</td>
                            <td>{{ $row->nip }}</td>
                            <td>{{ $row->ttl }}</td>
                            <td>{{ $row->email }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning" onclick="tombol_detail({{ $row->id }})" title="Details Pegawai {{ $row->nama_pegawai }}"  data-id="{{ $row->id }}">
                                        <i class="bx bxs-detail" ></i>
                                    </button>
                                    <button class="btn btn-success " onclick="tombol_reset({{ $row->users->id }})" title="Reset Password {{ $row->id }}">
                                        <i class="bx bxs-key"></i>
                                    </button>
                                    <button class="btn btn-danger" onclick="tombol_hapus({{ $row->id }})" title="Details Pegawai {{ $row->nama_pegawai }}"  data-id="{{ $row->id }}">
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


@endsection


