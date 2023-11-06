@extends('layout.main')

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>External Banchmarking</h4>
            </div>
            <div class="toolbar">
                <button class="btn btn-primary button_tambah">Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responesive">
                    <table class="table table-bordered Datatables" id="data-table">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Tahun</th>
                                <th>File</th>
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
                <form action="{{ route('external.store') }}" method="POST" enctype="multipart/form-data" id="form-tambah">
                    @csrf
                    <div class="modal-header">
                        <h4>Tambah Data External Banchmarking</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" id="tahun">Tahun</label>
                                    <select class="form-control form-control" name="tahun" id="tahun">
                                        <option selected disabled>Pilih Tahun</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">File </label>
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
                <form action="{{ route('external.update') }}" method="POST" enctype="multipart/form-data" id="form-edit">
                    @csrf
                    <input type="hidden" name="id_lama" id="id_lama" value="">
                    <div class="modal-header">
                        <h4>Ubah Data External Banchmarking</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" id="edit_tahun">Tahun</label>
                                    <select class="form-control" name="tahun" id="edit_tahun">
                                        <option selected> - Pilih Tahun -</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">File </label>
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
</div>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/external/list.js') }}"></script>
@endpush
