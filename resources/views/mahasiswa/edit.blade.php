@extends('layout.main')
@section('mahasiswa')

    <div class="col-12">
        <div class="card">
            <div class="card-header py-3">
                <h4 class="card-title mb-0 text-dark">Form Mahasiswa</h4>
                <div class="toolbar">
                    <button type="button" onclick="back()" class="btn btn-primary ">Kembali</button>
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
                                        <option >-Pilih Jenis Pendaftaran-</option>
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
                                        <option>-Pilih Program Studi-</option>
                                        <option {{ $mahasiswa->prodi == 'S2 Teknologi Pendidikan' ? 'selected' : '' }} value="S2 Teknologi Pendidikan" >S2 Teknologi Pendidikan</option>
                                        <option {{ $mahasiswa->prodi == 'S2 Manajemen Pendidikan' ? 'selected' : '' }} value="S2 Manajemen Pendidikan" >S2 Manajemen Pendidikan</option>
                                        <option {{ $mahasiswa->prodi == 'S2 Pend. IPS' ? 'selected' : '' }} value="S2 Pend. IPS" >S2 Pend. IPS</option>
                                        <option {{ $mahasiswa->prodi == 'S2 Pend. Bahasa Indonesia' ? 'selected' : '' }} value="S2 Pend. Bahasa Indonesia" >S2 Pend. Bahasa Indonesia</option>
                                        <option {{ $mahasiswa->prodi == 'S1 Bimbingan Konseling' ? 'selected' : '' }} value="5" >S1 Bimbingan Konseling</option>
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
                                <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form">Simpan</button>
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
                            <form action="{{ route('update.mahasiswa', ['id' => @$mahasiswa_umum->informasi_umum_id]) }}" method="POST" id="form-info" enctype="multipart/form-data">
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
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="domisili" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
                            <form action="{{ route('update.mahasiswa', @$mahasiswa_domisili->domisili_model_id) }}" method="POST" id="form-domisili" enctype="multipart/form-data">
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
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form" >Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="orang-tua" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('update.mahasiswa', @$mahasiswa_ortu->mahasiswa_ortu_model_id ) }}" method="POST" id="form-ortu" enctype="multipart/form-data">
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
                                                <input type="text" class="form-control form-control" name="nama_ayah" id="nama_ayah" value="{{ $mahasiswa_ortu->nama_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>Biodata Ibu</h5>
                                                <br>
                                                <label for="nama_ibu">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control" name="nama_ibu" id="nama_ibu" value="{{ $mahasiswa_ortu->nama_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nik_ayah">NIK</label>
                                                <input type="text" class="form-control form-control" name="nik_ayah" id="nik_ayah" value="{{ $mahasiswa_ortu->nik_ayah }}" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="nik_ibu">NIK</label>
                                                <input type="text" class="form-control form-control" name="nik_ibu" id="nik_ibu" value="{{ $mahasiswa_ortu->nik_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" name="tgl_lahir_ayah" id="tanggal_lahir_ayah" value="{{ $mahasiswa_ortu->tgl_lahir_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" name="tgl_lahir_ibu" id="tanggal_lahir_ibu" value="{{ $mahasiswa_ortu->tgl_lahir_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_hidup_ayah">Status Hidup</label>
                                                <input type="text" class="form-control form-control" name="status_hidup_ayah" id="status_hidup_ayah" value="{{ $mahasiswa_ortu->status_hidup_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="status_hidup_ibu">Status Hidup</label>
                                                <input type="text" class="form-control form-control" name="status_hidup_ibu" id="status_hidup_ibu" value="{{ $mahasiswa_ortu->status_hidup_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_kerabat_ayah">Status Kekerabatan</label>
                                                <input type="text" class="form-control form-control" name="status_kerabatan_ayah" id="status_kerabat_ayah" value="{{ $mahasiswa_ortu->status_kerabatan_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="status_kerabat_ibu">Status Kekerabatan</label>
                                                <input type="text" class="form-control form-control" name="status_kerabatan_ibu" id="status_kerabat_ibu" value="{{ $mahasiswa_ortu->status_kerabatan_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pendidikan_ayah">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_ayah" id="pendidikan_ayah" value="{{ $mahasiswa_ortu->pendidikan_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pendidikan_ibu">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_ibu" id="pendidikan_ibu" value="{{ $mahasiswa_ortu->pendidikan_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pekerjaan_ayah">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ $mahasiswa_ortu->pekerjaan_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pekerjaan_ibu">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ $mahasiswa_ortu->pekerjaan_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="penghasilan_ayah">Penghasilan</label>
                                                <input type="text" class="form-control form-control" name="penghasilan_ayah" id="penghasilan_ayah" value="{{ $mahasiswa_ortu->penghasilan_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="penghasilan_ibu">Penghasilan</label>
                                                <input type="text" class="form-control form-control" name="penghasilan_ibu" id="penghasilan_ibu" value="{{ $mahasiswa_ortu->penghasilan_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="alamat_ayah">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat_ayah" id="alamat_ayah" value="{{ $mahasiswa_ortu->alamat_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamat_ibu">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat_ibu" id="alamat_ibu" value="{{ $mahasiswa_ortu->alamat_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="no_telp_ayah">No. Telepon</label>
                                                <input type="text" class="form-control form-control" name="no_telp_ayah" id="no_telp_ayah" value="{{ $mahasiswa_ortu->no_telp_ayah }}" >
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="no_telp_ibu">No. Telepon</label>
                                                <input type="text" class="form-control form-control" name="no_telp_ibu" id="no_telp_ibu" value="{{ $mahasiswa_ortu->no_telp_ibu }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="email_ayah">Email</label>
                                                <input type="email" class="form-control form-control" name="email_ayah" id="email_ayah" value="{{ $mahasiswa_ortu->email_ayah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="email_ibu">Email</label>
                                                <input type="email" class="form-control form-control" name="email_ibu" id="email_ibu" value="{{ $mahasiswa_ortu->email_ibu }}">
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
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="wali" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('update.mahasiswa', $mahasiswa_wali->mahasiswa_wali_id ) }}" method="post" id="form-wali" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="wali">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nama_wali">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control" name="nama_wali" id="nama_wali" value="{{ $mahasiswa_wali->nama_wali }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="pekerjaan_wali">Pekerjaan</label>
                                                <input type="text" class="form-control form-control" name="pekerjaan_wali" id="pekerjaan_wali" value="{{ $mahasiswa_wali->pekerjaan_wali }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nik_wali">NIK</label>
                                                <input type="text" class="form-control form-control" name="nik_wali" id="nik_wali" value="{{ $mahasiswa_wali->nik_wali }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="penghasilan_wali">Penghasilan</label>
                                                <input type="text" class="form-control form-control" name="penghasilan_wali" id="penghasilan_wali" value="{{ $mahasiswa_wali->penghasilan_wali }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="tanggal_lahir_wali">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control" name="tgl_lahir_wali" id="tanggal_lahir_wali" value="{{ $mahasiswa_wali->tgl_lahir_wali }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamat_wali">Alamat</label>
                                                <input type="text" class="form-control form-control" name="alamat_wali" id="alamat_wali" value="{{ $mahasiswa_wali->alamat_wali }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_hidup_wali">Status Hidup</label>
                                                <input type="text" class="form-control form-control" name="status_hidup_wali" id="status_hidup_wali" value="{{ $mahasiswa_wali->status_hidup_wali }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="no_telp_wali">No. Telepon</label>
                                                <input type="text" class="form-control form-control" name="no_telp_wali" id="no_telp_wali" value="{{ $mahasiswa_wali->no_telp_wali }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="status_kerabat_wali">Status Kekerabatan</label>
                                                <input type="text" class="form-control form-control" name="status_kerabatan_wali" id="status_kerabat_wali" value="{{ $mahasiswa_wali->status_kerabatan_wali }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="email_wali">Email</label>
                                                <input type="text" class="form-control form-control" name="email_wali" id="email_wali" value="{{ $mahasiswa_wali->email_wali }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pendidikan_wali">Pendidikan Terakhir</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_wali" id="pendidikan_wali" value="{{ $mahasiswa_wali->pendidikan_wali }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="aktivasi_wali">Aktivasi?</label>
                                                <input type="text" class="form-control form-control">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="sekolah" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('update.mahasiswa', $mahasiswa_sekolah->mahasiswa__sekolah_model_id ) }}" method="post" id="form-sekolah" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="sekolah">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="pendidikan_asal">Pendidikan Asal</label>
                                                <input type="text" class="form-control form-control" name="pendidikan_asal" id="pendidikan_asal" value="{{ $mahasiswa_sekolah->pendidikan_asal }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamat_sekolah">Alamat Sekolan</label>
                                                <input type="text" class="form-control form-control" name="alamat_sekolah" id="alamat_sekolah" value="{{ $mahasiswa_sekolah->alamat_sekolah }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="propinsi_sekolah">Propinsi Sekolah</label>
                                                <input type="text" class="form-control form-control" name="propinsi_sekolah" id="propinsi_sekolah" value="{{ $mahasiswa_sekolah->propinsi_sekolah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="telp_sekolah">Telepon Sekolah</label>
                                                <input type="text" class="form-control form-control" name="telp_sekolah" id="telp_sekolah" value="{{ $mahasiswa_sekolah->telp_sekolah }}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="kota_sekolah">Kota Sekolah</label>
                                                <input type="text" class="form-control form-control" name="kota_sekolah" id="kota_sekolah" value="{{ $mahasiswa_sekolah->kota_sekolah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="nomor_ijasah">Nomor Ijasah Sekolah</label>
                                                <input type="text" class="form-control form-control" name="nomor_ijasah_sekolah" id="nomor_ijasah" value="{{ $mahasiswa_sekolah->nomor_ijasah_sekolah }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="sekolah">Sekolah</label>
                                                <input type="text" class="form-control form-control" name="sekolah" id="sekolah" value="{{ $mahasiswa_sekolah->sekolah }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="file_ijasah">File Ijasah Sekolah</label>
                                                <input type="file" class="form-control form-control" name="image" id="image" accept=".jpg,.jpeg,.png,.pdf,.gif,.xlsx" value="{{ $mahasiswa_sekolah->file_name }}"  >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nisn">NISN</label>
                                                <input type="text" class="form-control form-control" name="nisn" id="nisn" value="{{ $mahasiswa_sekolah->nisn }}" required>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="perguruan-tinggi" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
                            <form action="{{ route('update.mahasiswa', $mahasiswa_perguruan->mahasiswa_perguruan_id ) }}" method="post" id="form-perguruan" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="iid" name="iid" value="">
                                <input type="hidden" name="id" id="id" value="">
                                <input type="hidden" name="jenis" id="jenis" value="perguruan_tinggi">
                                <div class="row mb-2">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="perguruan_tinggi_asal">Perguruan Tinggi Asal</label>
                                                <input type="text" class="form-control form-control" name="perguruan_tinggi_asal" id="perguruan_tinggi_asal" value="{{ $mahasiswa_perguruan->perguruan_tinggi_asal }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="sks_asal">SKS Asal(diakui)</label>
                                                <input type="text" class="form-control form-control" name="sks_asal" id="sks_asal" value="{{ $mahasiswa_perguruan->sks_asal }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="program_studi_asal">Program Studi Asal</label>
                                                <input type="text" class="form-control form-control" name="prodi_asal" id="program_studi_asal" value="{{ $mahasiswa_perguruan->prodi_asal }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="surat_rekom_pindah">Surat Rekom. Pindah</label>
                                                <input type="text" class="form-control form-control" name="surat_rekom_pindah" id="surat_rekom_pindah" value="{{ $mahasiswa_perguruan->surat_rekom_pindah }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="nim_asal">NIM Asal</label>
                                                <input type="text" class="form-control form-control" name="nim_asal" id="nim_asal" value="{{ $mahasiswa_perguruan->nim_asal }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="transkrip_asal">Transkrip Asal</label>
                                                <input type="text" class="form-control form-control" name="transkrip_pindah" id="transkrip_asal" value="{{ $mahasiswa_perguruan->transkrip_pindah }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="ipk_asal">IPK Asal</label>
                                                <input type="text" class="form-control form-control" name="ipk_asal" id="ipk_asal" value="{{ $mahasiswa_perguruan->ipk_asal }}">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light btn-submit update-form">Simpan</button>
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

@endsection
