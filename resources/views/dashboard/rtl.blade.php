@extends('layout.main')

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Laporan Rencana Tidak Lanjut</h4>
            </div>
            <div class="toolbar">
                <button class="btn btn-primary button_tambah"> Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responesive">
                    <table class="table table-striped table-bordered" id="data-table">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Program Studi</th>
                                <th>File Laporan RTL</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-popout" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('rtl.store') }}" method="POST" enctype="multipart/form-data" id="form-tambah">
                    @csrf
                    <div class="modal-header">
                        <h4>Tambah Data RTL</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Program Studi</label>
                                    <select class="form-control form-control" name="program_studi" id="program_studi">
                                        <option value="">-Pilih Program Studi-</option>
                                        <option value="S2 Teknologi Pendidikan">S2 Teknologi Pendidikan</option>
                                        <option value="S2 Manajemen Pendidikan">S2 Manajemen Pendidikan</option>
                                        <option value="S2 Pend. IPS">S2 Pend. IPS</option>
                                        <option value="S2 Pend. Bahasa Indonesia">S2 Pend. Bahasa Indonesia</option>
                                        <option value="S1 Bimbingan Konseling">S1 Bimbingan Konseling</option>
                                        <option value="6">S1 Pend. Jasmani &amp; Kesehatan</option>
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
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">File Laporan RTL</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Modal Edit --}}
    <div class="modal fade modal-popout" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('rtl.update') }}" method="POST" enctype="multipart/form-data" id="form-edit">
                    @csrf
                    <input type="hidden" name="id_lama" id="id_lama" value="">
                    <div class="modal-header">
                        <h4>Ubah Data RTL</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Program Studi</label>
                                    <select class="form-control form-control" name="program_studi" id="edit_program_studi">
                                        <option value="">-Pilih Program Studi-</option>
                                        <option value="S2 Teknologi Pendidikan">S2 Teknologi Pendidikan</option>
                                        <option value="S2 Manajemen Pendidikan">S2 Manajemen Pendidikan</option>
                                        <option value="S2 Pend. IPS">S2 Pend. IPS</option>
                                        <option value="S2 Pend. Bahasa Indonesia">S2 Pend. Bahasa Indonesia</option>
                                        <option value="S1 Bimbingan Konseling">S1 Bimbingan Konseling</option>
                                        <option value="S1 Pend. Jasmani &amp; Kesehatan">S1 Pend. Jasmani &amp; Kesehatan</option>
                                        <option value="S1 Pend. Guru Sekolah Dasar">S1 Pend. Guru Sekolah Dasar</option>
                                        <option value="S2 Pend. Guru SD">S2 Pend. Guru SD</option>
                                        <option value="S1 Pend. Guru PAUD">S1 Pend. Guru PAUD</option>
                                        <option value="S1 Pend. Ekonomi">S1 Pend. Ekonomi</option>
                                        <option value="S1 Pend. Geografi">S1 Pend. Geografi</option>
                                        <option value="S1 Pend. Kewarganegaraan">S1 Pend. Kewarganegaraan</option>
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
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">File Laporan RTL</label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/rtl/list.js') }}"></script>
@endpush
