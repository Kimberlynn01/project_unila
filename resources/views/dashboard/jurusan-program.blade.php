@extends('layout.main')


@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title mb-0 text-dark">Jurusan dan Program Studi</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="table_length"><label>Tampilkan: <select
                                                name="table_length" aria-controls="table"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                                <option value="-1">Semua</option>
                                            </select></label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="table_filter" class="dataTables_filter"><label><span>Cari:</span> <input
                                                type="search" class="form-control form-control-sm"
                                                placeholder="Masukan pencarian..." aria-controls="table"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered dataTable no-footer"
                                        style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid"
                                        aria-describedby="table_info">
                                        <thead style="background-color: #F1F1F1;">
                                            <tr role="row">
                                                <th class="text-center sorting_asc" width="5%" tabindex="0"
                                                    aria-controls="table" rowspan="1" colspan="1"
                                                    aria-label="No: activate to sort column descending"
                                                    aria-sort="ascending" style="width: 18px;">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1"
                                                    colspan="1" aria-label="Jurusan: activate to sort column ascending"
                                                    style="width: 449px;">Jurusan</th>
                                                <th class="sorting" tabindex="0" aria-controls="table" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Program Studi: activate to sort column ascending"
                                                    style="width: 486px;">Program Studi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">1.</td>
                                                <td>Ilmu Pendidikan</td>
                                                <td>S1 Pend. Guru Sekolah Dasar<br>S2 Pend. Guru SD<br>S1 Pend. Guru
                                                    PAUD<br>S1 Pend. Ekonomi<br>S1 Pend. Geografi<br>S2 Teknologi
                                                    Pendidikan<br>S2 Manajemen Pendidikan<br>S1 Pendidikan Musik<br>S2 Pend.
                                                    IPS<br>S2 Pend. Bahasa Indonesia<br>S1 Pend. Jasmani &amp; Kesehatan
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">2.</td>
                                                <td>Pendidikan IPS</td>
                                                <td>S1 Pend. Kewarganegaraan<br>S1 Pend. Sejarah<br>S1 Pend.
                                                    Matematika<br>S1 Pend. Biologi<br>S1 Pend. Kimia<br>S1 Pend.
                                                    Fisika<br>S1 Pendidikan Teknologi Informasi</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">3.</td>
                                                <td>Pendidikan MIPA</td>
                                                <td>S1 Pend. Bahasa Indonesia<br>S1 Pend. Bahasa Inggris<br>S1 Pend. Seni
                                                    Tari<br>S2 Pendidikan Bahasa Inggris<br>S2 Pendidikan Keguruan Guru
                                                    SD<br>S1 Pendidikan Bahasa Perancis<br>S1 Bimbingan Konseling</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1">4.</td>
                                                <td>Pendidikan Bahasa dan Seni</td>
                                                <td>S2 Pendidikan Fisika<br>S2 Pendidikan Matematika<br>S2 Keguruan
                                                    IPA<br>S2 Pendidikan Bahasa Lampung</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="table_info" role="status" aria-live="polite">
                                        Menampilkan 1 sampai 4 dari 4 data</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="table_previous"><a
                                                    href="#" aria-controls="table" data-dt-idx="0" tabindex="0"
                                                    class="page-link">←</a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="table" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="table_next"><a
                                                    href="#" aria-controls="table" data-dt-idx="2" tabindex="0"
                                                    class="page-link">→</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
