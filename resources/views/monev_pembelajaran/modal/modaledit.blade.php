<div class="modal-content">
    <form action="{{ route('monev.update', ['id' => $datamonev->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-header bg-primary">
            <h4 class="text-light">Laporan Audit Form</h4>
            <button class="btn btn-close text-light" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Program Studi</label>
                        <select class="form-control form-control" name="prodi" id="prodi" required="">
                            <option disabled value="">-Pilih Program Studi-</option>
                            <option {{ $datamonev->prodi === 'S2 Teknologi Pendidikan' ? 'selected' : '' }}
                                value="S2 Teknologi Pendidikan">S2 Teknologi Pendidikan</option>
                            <option {{ $datamonev->prodi === 'S2 Manajemen Pendidikan' ? 'selected' : '' }}
                                value="S2 Manajemen Pendidikan">S2 Manajemen Pendidikan</option>
                            <option {{ $datamonev->prodi === 'S2 Pend. IPS' ? 'selected' : '' }} value="S2 Pend. IPS">S2
                                Pend. IPS</option>
                            <option {{ $datamonev->prodi === 'S2 Pend. Bahasa Indonesia' ? 'selected' : '' }}
                                value="S2 Pend. Bahasa Indonesia">S2 Pend. Bahasa Indonesia</option>
                            <option {{ $datamonev->prodi === 'S1 Bimbingan Konseling' ? 'selected' : '' }}
                                value="S1 Bimbingan Konseling">S1 Bimbingan Konseling</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Jasmani & Kesehatan' ? 'selected' : '' }}
                                value="S1 Pend. Jasmani & Kesehatan">S1 Pend. Jasmani & Kesehatan</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Guru Sekolah Dasar' ? 'selected' : '' }}
                                value="S1 Pend. Guru Sekolah Dasar">S1 Pend. Guru Sekolah Dasar</option>
                            <option {{ $datamonev->prodi === 'S2 Pend. Guru SD' ? 'selected' : '' }}
                                value="S2 Pend. Guru SD">S2 Pend. Guru SD</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Guru PAUD' ? 'selected' : '' }}
                                value="S1 Pend. Guru PAUD">S1 Pend. Guru PAUD</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Ekonomi' ? 'selected' : '' }}
                                value="S1 Pend. Ekonomi">S1 Pend. Ekonomi</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Geografi' ? 'selected' : '' }}
                                value="S1 Pend. Geografi">S1 Pend. Geografi</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Kewarganegaraan' ? 'selected' : '' }}
                                value="S1 Pend. Kewarganegaraan">S1 Pend. Kewarganegaraan</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Sejarah' ? 'selected' : '' }}
                                value="S1 Pend. Sejarah">S1 Pend. Sejarah</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Matematika' ? 'selected' : '' }}
                                value="S1 Pend. Matematika">S1 Pend. Matematika</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Biologi' ? 'selected' : '' }}
                                value="S1 Pend. Biologi">S1 Pend. Biologi</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Kimia' ? 'selected' : '' }}
                                value="S1 Pend. Kimia">S1 Pend. Kimia</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Fisika' ? 'selected' : '' }}
                                value="S1 Pend. Fisika">S1 Pend. Fisika</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Bahasa Indonesia' ? 'selected' : '' }}
                                value="S1 Pend. Bahasa Indonesia">S1 Pend. Bahasa Indonesia</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Bahasa Inggris' ? 'selected' : '' }}
                                value="S1 Pend. Bahasa Inggris">S1 Pend. Bahasa Inggris</option>
                            <option {{ $datamonev->prodi === 'S1 Pend. Seni Tari' ? 'selected' : '' }}
                                value="S1 Pend. Seni Tari">S1 Pend. Seni Tari</option>
                            <option {{ $datamonev->prodi === 'S2 Pendidikan Bahasa Inggris' ? 'selected' : '' }}
                                value="S2 Pendidikan Bahasa Inggris">S2 Pendidikan Bahasa Inggris</option>
                            <option {{ $datamonev->prodi === 'S2 Pendidikan Keguruan Guru SD' ? 'selected' : '' }}
                                value="S2 Pendidikan Keguruan Guru SD">S2 Pendidikan Keguruan Guru SD</option>
                            <option {{ $datamonev->prodi === 'S1 Pendidikan Bahasa Perancis' ? 'selected' : '' }}
                                value="S1 Pendidikan Bahasa Perancis">S1 Pendidikan Bahasa Perancis</option>
                            <option {{ $datamonev->prodi === 'S2 Pendidikan Fisika' ? 'selected' : '' }}
                                value="S2 Pendidikan Fisika">S2 Pendidikan Fisika</option>
                            <option {{ $datamonev->prodi === 'S2 Pendidikan Matematika' ? 'selected' : '' }}
                                value="S2 Pendidikan Matematika">S2 Pendidikan Matematika</option>
                            <option {{ $datamonev->prodi === 'S2 Keguruan IPA' ? 'selected' : '' }}
                                value="S2 Keguruan IPA">S2 Keguruan IPA</option>
                            <option {{ $datamonev->prodi === 'S2 Pendidikan Bahasa Lampung' ? 'selected' : '' }}
                                value="S2 Pendidikan Bahasa Lampung">S2 Pendidikan Bahasa Lampung</option>
                            <option {{ $datamonev->prodi === 'S1 Pendidikan Teknologi Informasi' ? 'selected' : '' }}
                                value="S1 Pendidikan Teknologi Informasi">S1 Pendidikan Teknologi Informasi
                            </option>
                            <option {{ $datamonev->prodi === 'S1 Pendidikan Musik' ? 'selected' : '' }}
                                value="S1 Pendidikan Musik">S1 Pendidikan Musik</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Semester</label>
                        <select class="form-control form-control" name="semester" id="semester" required="">
                            <option selected value="">-Pilih Semester-</option>
                            <option {{ $datamonev->semester === 'Semester ganjil' ? 'selected' : '' }} value="Semester ganjil">Semester ganjil</option>
                            <option {{ $datamonev->semester === 'Semester genap' ? 'selected' : '' }} value="Semester genap">Semester genap</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Priode</label>
                        <select class="form-control form-control" name="priode" id="priode" required="">
                            <option selected value="">-Pilih Priode-</option>
                            <option {{ $datamonev->priode === 'Awala Semester' ? 'selected' : '' }} value="Awala Semester">Awala Semester</option>
                            <option {{ $datamonev->priode === 'Tengah Semester' ? 'selected' : '' }} value="Tengah Semester">Tengah Semester</option>
                            <option {{ $datamonev->priode === 'Akhir Semester' ? 'selected' : '' }} value="Akhir Semester">Akhir Semester</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Tahun Ajaran</label>
                        <select class="form-control form-control" name="tahun" id="tahun" required="">
                            <option selected value="">-Pilih Tahun Ajaran-</option>
                            <option {{ $datamonev->tahun === '2021-2022' ? 'selected' : '' }} value="2021-2022">2021-2022</option>
                            <option {{ $datamonev->tahun === '2022-2023' ? 'selected' : '' }} value="2022-2023">2022-2023</option>
                            <option {{ $datamonev->tahun === '2023-2024' ? 'selected' : '' }} value="2023-2024">2023-2024</option>
                            <option {{ $datamonev->tahun === '2024-2025' ? 'selected' : '' }} value="2024-2025">2024-2025</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Lampiran Monev</label>
                        <input type="file" name="dokumen" class="form-control">
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
