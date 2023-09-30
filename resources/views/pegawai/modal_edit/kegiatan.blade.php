<div class="modal-content">
    <form action="{{ route('modal.store', ['id' => $data->id, 'type' => 'kegiatan_edit']) }}" method="post">
        @csrf
        {{-- <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}"> --}}
        <div class="modal-header">
            <div class="modal-title">
                <h1>Kegiatan</h1>
            </div>
            <button class="btn btn-close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Kegiatan</label>
                    <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan" value="{{ $data->kegiatan }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tahun</label>
                    <input type="date" name="tahun" class="form-control" value="{{ $data->tahun }}">
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Peranan</label>
                    <input type="text" name="peranan" class="form-control" placeholder="Peranan" value="{{ $data->peranan }}">
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label">Kategori</label>
                    <select name="kategori" class="form-control">
                        <option selected>-- Pilih Kategori --</option>
                        <option {{ $data->kategori === 'nasional' ? 'selected' : '' }} value="nasional">Nasional</option>
                        <option {{ $data->kategori === 'internasional' ? 'selected' : '' }} value="internasional">Internasional</option>
                        <option {{ $data->kategori === 'lokal' ? 'selected' : '' }} value="lokal">Lokal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
