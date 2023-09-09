<form action="{{ route('edit.details', ['jenis' => 'dosen_kegiatan','id' => $data->id]) }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}"> --}}
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <h5 class="modal-title">Kegiatan</h5>
                </div>
                <button type="button" data-bs-dismiss="modal" class="btn-close">x</button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="">Nama Kegiatan</label>
                            <input type="text" name="kegiatan" id="kegiatan" class="form-control" placeholder="Nama Kegiatan" required="" value="{{ $data->kegiatan }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Tahun</label>
                            <input type="number" name="tahun" id="tahun" class="form-control" placeholder="Tahun" required="" value="{{ $data->tahun }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="">Peranan</label>
                            <input type="text" name="peranan" id="peranan" class="form-control" placeholder="Peranan Sebagai" required="" value="{{ $data->peranan }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control" required="">
                                <option selected disabled>-- Pilih Kategori --</option>
                                <option {{ $data->kategori === 'nasional' ? 'selected' : '' }} value="nasional">Nasional</option>
                                <option {{ $data->kategori === 'internasional' ? 'selected' : '' }} value="internasional">Internasional</option>
                                <option {{ $data->kategori === 'lokal' ? 'selected' : '' }} value="lokal">Lokal</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </div>

    </form>
