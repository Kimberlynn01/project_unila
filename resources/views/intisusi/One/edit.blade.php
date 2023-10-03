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
                <form action="{{ route('store.edit.one', $ikuOne->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="klasifikasi">
                        <font color="red">Sub Klasifikasi</font>
                    </label>
                    <select class="form-control col-12" name="klasifikasi" id="klasifikasi">
                        <option {{ $ikuOne->klasifikasi === 'a' ? 'selected' : '' }} value="a">
                            Lulusan mendapatkan pekerjaan yang layak (masa tunggu <6 bulan)
                        </option>
                        <option {{ $ikuOne->klasifikasi === 'b' ? 'selected' : '' }} value="b">Lulusan yang Melanjutkan Studi</option>
                        <option {{ $ikuOne->klasifikasi === 'c' ? 'selected' : '' }} value="c">Lulusan Berwirausaha</option>
                    </select>
                    <br>
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control" name="nama" id="nama" value="{{ $ikuOne->nama }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="npm">NPM</label>
                                    <input type="text" class="form-control form-control" name="npm" id="npm" value="{{ $ikuOne->npm }}" onkeypress="return cek_nomor(event)" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="program_studi">Program Studi</label>
                                    <select class="form-control form-control" name="prodi" id="program_studi" required>
                                        <option value="">-Pilih Program Studi-</option>
                                        <option {{ $ikuOne->prodi === '1' ? 'selected' : '' }} value="1">S2 Teknologi Pendidikan</option>
                                        <option {{ $ikuOne->prodi === '2' ? 'selected' : '' }} value="2">S2 Manajemen Pendidikan</option>
                                        <option {{ $ikuOne->prodi === '3' ? 'selected' : '' }} value="3">S2 Pend. IPS</option>
                                        <option {{ $ikuOne->prodi === '4' ? 'selected' : '' }} value="4">S2 Pend. Bahasa Indonesia</option>
                                        <option {{ $ikuOne->prodi === '5' ? 'selected' : '' }} value="5">S1 Bimbingan Konseling</option>
                                        <option {{ $ikuOne->prodi === '6' ? 'selected' : '' }} value="6">S1 Pend. Jasmani & Kesehatan</option>
                                        <option {{ $ikuOne->prodi === '7' ? 'selected' : '' }} value="7">S1 Pend. Guru Sekolah Dasar</option>
                                        <option {{ $ikuOne->prodi === '8' ? 'selected' : '' }} value="8">S2 Pend. Guru SD</option>
                                        <option {{ $ikuOne->prodi === '9' ? 'selected' : '' }} value="9">S1 Pend. Guru PAUD</option>
                                        <option {{ $ikuOne->prodi === '10' ? 'selected' : '' }} value="10">S1 Pend. Ekonomi</option>
                                        <option {{ $ikuOne->prodi === '11' ? 'selected' : '' }} value="11">S1 Pend. Geografi</option>
                                        <option {{ $ikuOne->prodi === '12' ? 'selected' : '' }} value="12">S1 Pend. Kewarganegaraan</option>
                                        <option {{ $ikuOne->prodi === '13' ? 'selected' : '' }} value="13">S1 Pend. Sejarah</option>
                                        <option {{ $ikuOne->prodi === '14' ? 'selected' : '' }} value="14">S1 Pend. Matematika</option>
                                        <option {{ $ikuOne->prodi === '15' ? 'selected' : '' }} value="15">S1 Pend. Biologi</option>
                                        <option {{ $ikuOne->prodi === '16' ? 'selected' : '' }} value="16">S1 Pend. Kimia</option>
                                        <option {{ $ikuOne->prodi === '17' ? 'selected' : '' }} value="17">S1 Pend. Fisika</option>
                                        <option {{ $ikuOne->prodi === '18' ? 'selected' : '' }} value="18">S1 Pend. Bahasa Indonesia</option>
                                        <option {{ $ikuOne->prodi === '19' ? 'selected' : '' }} value="19">S1 Pend. Bahasa Inggris</option>
                                        <option {{ $ikuOne->prodi === '20' ? 'selected' : '' }} value="20">S1 Pend. Seni Tari</option>
                                        <option {{ $ikuOne->prodi === '21' ? 'selected' : '' }} value="21">S2 Pendidikan Bahasa Inggris</option>
                                        <option {{ $ikuOne->prodi === '22' ? 'selected' : '' }} value="22">S2 Pendidikan Keguruan Guru SD</option>
                                        <option {{ $ikuOne->prodi === '23' ? 'selected' : '' }} value="23">S1 Pendidikan Bahasa Perancis</option>
                                        <option {{ $ikuOne->prodi === '24' ? 'selected' : '' }} value="24">S2 Pendidikan Fisika</option>
                                        <option {{ $ikuOne->prodi === '25' ? 'selected' : '' }} value="25">S2 Pendidikan Matematika</option>
                                        <option {{ $ikuOne->prodi === '26' ? 'selected' : '' }} value="26">S2 Keguruan IPA</option>
                                        <option {{ $ikuOne->prodi === '27' ? 'selected' : '' }} value="27">S2 Pendidikan Bahasa Lampung</option>
                                        <option {{ $ikuOne->prodi === '28' ? 'selected' : '' }} value="28">S1 Pendidikan Teknologi Informasi</option>
                                        <option {{ $ikuOne->prodi === '29' ? 'selected' : '' }} value="29">S1 Pendidikan Musik</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="fakultas">Fakultas</label>
                                    <input type="text" class="form-control form-control" name="fakultas" id="fakultas" value="{{ $ikuOne->fakultas }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="no_ijazah">No Ijazah</label>
                                    <input type="text" class="form-control form-control" name="ijasah" id="no_ijazah" value="{{ $ikuOne->ijasah }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="masa_tunggu">Masa Tunggu</label>
                                    <input type="text" class="form-control form-control" name="masa_tggu" id="masa_tunggu" value="{{ $ikuOne->masa_tggu }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama_perusahaan">Nama Perusahaan</label>
                                    <input type="text" class="form-control form-control" name="nama_pt" id="nama_perusahaan" value="{{ $ikuOne->nama_pt }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" class="form-control form-control" name="provinsi" id="provinsi" value="{{ $ikuOne->provinsi }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="gaji">Gaji</label>
                                    <input type="text" class="form-control form-control" name="gaji" id="gaji" value="{{ $ikuOne->gaji }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nama_bidang_usaha">Nama/Bidang Usaha</label>
                                    <input type="text" class="form-control form-control" name="usaha" id="nama_bidang_usaha" value="{{ $ikuOne->usaha }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="pendapatan">Pendapatan</label>
                                    <input type="text" class="form-control form-control" name="pendapatan" id="pendapatan" value="{{ $ikuOne->pendapatan }}" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="tempa">Tempa</label>
                                    <input type="text" class="form-control form-control" name="tempa" id="tempa" value="{{ $ikuOne->tempa }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="melanjut_studi">Melanjutkan Studi Jenjang</label>
                                    <input type="text" class="form-control form-control" name="jenjang" id="melanjut_studi" value="{{ $ikuOne->jenjang }}" required>
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
