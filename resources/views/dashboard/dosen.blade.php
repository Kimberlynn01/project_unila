@extends('layout.main')
@section('dosen')
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
                    {{-- <input type="text" class="mt-3" name="id" id="id" value="{{ session('form_profile_dosen_id') }}"> --}}
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
                                <input type="hidden" name="form_profile_dosen_id" value="{{ 'form_profile_dosen_id' }}">
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
    </div>
</div></div>
@endsection
