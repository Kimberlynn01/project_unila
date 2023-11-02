<div class="modal fade " style="z-index: 9999" id="modal-rtl">
    <div class="modal-dialog modal-dialog-popout ">
        <div class="modal-content">
            <form action="{{ route('store.rtl') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" >
                <div class="modal-header bg-primary">
                    <h4 class="text-light">Laporan Audit Form</h4>
                    <button class="btn btn-close text-light" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">Program Studi</label>
                                <select class="form-control form-control" name="prodi" id="prodi" required="">
                                    <option selected value="">-Pilih Program Studi-</option>
                                    <option value="S2 Teknologi Pendidikan">S2 Teknologi Pendidikan</option>
                                    <option value="S2 Manajemen Pendidikan">S2 Manajemen Pendidikan</option>
                                    <option value="S2 Pend. IPS">S2 Pend. IPS</option>
                                    <option value="S2 Pend. Bahasa Indonesia">S2 Pend. Bahasa Indonesia</option>
                                    <option value="S1 Bimbingan Konseling">S1 Bimbingan Konseling</option>
                                    <option value="S1 Pend. Jasmani & Kesehatan">S1 Pend. Jasmani & Kesehatan</option>
                                    <option value="S1 Pend. Guru Sekolah Dasar">S1 Pend. Guru Sekolah Dasar</option>
                                    <option value="S2 Pend. Guru SD">S2 Pend. Guru SD</option>
                                    <option value="S1 Pend. Guru PAUD">S1 Pend. Guru PAUD</option>
                                    <option value="S1 Pend. Ekonomi">S1 Pend. Ekonomi</option>
                                    <option value="S1 Pend. Geografi">S1 Pend. Geografi</option>
                                    <option value="S1 Pend. Kewarganegaraan">S1 Pend. Kewarganegaraan</option>
                                    <option value="S1 Pend. Sejarah">S1 Pend. Sejarah</option>
                                    <option value="S1 Pend. Matematika">S1 Pend. Matematika</option>
                                    <option value="S1 Pend. Biologi">S1 Pend. Biologi</option>
                                    <option value="S1 Pend. Kimia">S1 Pend. Kimia</option>
                                    <option value="S1 Pend. Fisika">S1 Pend. Fisika</option>
                                    <option value="S1 Pend. Bahasa Indonesia">S1 Pend. Bahasa Indonesia</option>
                                    <option value="S1 Pend. Bahasa Inggris">S1 Pend. Bahasa Inggris</option>
                                    <option value="S1 Pend. Seni Tari">S1 Pend. Seni Tari</option>
                                    <option value="S2 Pendidikan Bahasa Inggris">S2 Pendidikan Bahasa Inggris</option>
                                    <option value="S2 Pendidikan Keguruan Guru SD">S2 Pendidikan Keguruan Guru SD</option>
                                    <option value="S1 Pendidikan Bahasa Perancis">S1 Pendidikan Bahasa Perancis</option>
                                    <option value="S2 Pendidikan Fisika">S2 Pendidikan Fisika</option>
                                    <option value="S2 Pendidikan Matematika">S2 Pendidikan Matematika</option>
                                    <option value="S2 Keguruan IPA">S2 Keguruan IPA</option>
                                    <option value="S2 Pendidikan Bahasa Lampung">S2 Pendidikan Bahasa Lampung</option>
                                    <option value="S1 Pendidikan Teknologi Informasi">S1 Pendidikan Teknologi Informasi
                                    </option>
                                    <option value="S1 Pendidikan Musik">S1 Pendidikan Musik</option>
                                </select>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Lampiran File</label>
                                <input type="file" name="pas_file" class="form-control">
                                <label class="text-danger" style="font-size: 13px">*Max 2MB( pdf | png | jpg | jpeg )</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-close bg-secondary text-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
