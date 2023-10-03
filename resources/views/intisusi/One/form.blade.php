@extends('layout.main')

@section('main')

<div class="row">


    <div class="col-12">
        <div class="card">
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
            <div class="card-header py-3 bg-primary">
                <h4 class="card-title mb-0 text-white">Form IKU 1</h4>
                <div class="toolbar">
                    <a href="/iku/one">
                        <button type="button" class="btn bg-white text-dark">Kembali</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('store.form.one', ['type' => 'store']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control" name="nama" id="nama" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="npm">NPM</label>
                                    <input type="text" class="form-control form-control" name="npm" id="npm" value="" onkeypress="return cek_nomor(event)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="program_studi">Program Studi</label>
                                    <select class="form-control form-control" name="prodi" id="program_studi" required>
                                        <option value="">-Pilih Program Studi-</option>
                                        <option value="1">S2 Teknologi Pendidikan</option>
                                        <option value="2">S2 Manajemen Pendidikan</option>
                                        <option value="3">S2 Pend. IPS</option>
                                        <option value="4">S2 Pend. Bahasa Indonesia</option>
                                        <option value="5">S1 Bimbingan Konseling</option>
                                        <option value="6">S1 Pend. Jasmani & Kesehatan</option>
                                        <option value="7">S1 Pend. Guru Sekolah Dasar</option>
                                        <option value="8">S2 Pend. Guru SD</option>
                                        <option value="9">S1 Pend. Guru PAUD</option>
                                        <option value="10">S1 Pend. Ekonomi</option>
                                        <option value="11">S1 Pend. Geografi</option>
                                        <option value="12">S1 Pend. Kewarganegaraan</option>
                                        <option value="13">S1 Pend. Sejarah</option>
                                        <option value="14">S1 Pend. Matematika</option>
                                        <option value="15">S1 Pend. Biologi</option>
                                        <option value="16">S1 Pend. Kimia</option>
                                        <option value="17">S1 Pend. Fisika</option>
                                        <option value="18">S1 Pend. Bahasa Indonesia</option>
                                        <option value="19">S1 Pend. Bahasa Inggris</option>
                                        <option value="20">S1 Pend. Seni Tari</option>
                                        <option value="21">S2 Pendidikan Bahasa Inggris</option>
                                        <option value="22">S2 Pendidikan Keguruan Guru SD</option>
                                        <option value="23">S1 Pendidikan Bahasa Perancis</option>
                                        <option value="24">S2 Pendidikan Fisika</option>
                                        <option value="25">S2 Pendidikan Matematika</option>
                                        <option value="26">S2 Keguruan IPA</option>
                                        <option value="27">S2 Pendidikan Bahasa Lampung</option>
                                        <option value="28">S1 Pendidikan Teknologi Informasi</option>
                                        <option value="29">S1 Pendidikan Musik</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="fakultas">Fakultas</label>
                                    <input type="text" class="form-control form-control" name="fakultas" id="fakultas" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="no_ijazah">No Ijazah</label>
                                    <input type="text" class="form-control form-control" name="ijasah" id="no_ijazah" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="masa_tunggu">Masa Tunggu</label>
                                    <input type="text" class="form-control form-control" name="masa_tggu" id="masa_tunggu" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control form-control" name="nama_pt" id="nama_perusahaan" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control form-control" name="provinsi" id="provinsi" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="gaji">Gaji</label>
                                    <input type="text" class="form-control form-control" name="gaji" id="gaji" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nama_bidang_usaha">Nama/Bidang Usaha</label>
                                    <input type="text" class="form-control form-control" name="usaha" id="nama_bidang_usaha" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="pendapatan">Pendapatan</label>
                                    <input type="text" class="form-control form-control" name="pendapatan" id="pendapatan" value="" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="tempa">Tempa</label>
                                    <input type="text" class="form-control form-control" name="tempa" id="tempa" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="melanjut_studi">Melanjutkan Studi Jenjang</label>
                                    <input type="text" class="form-control form-control" name="jenjang" id="melanjut_studi" value="" required>
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


@endsection
