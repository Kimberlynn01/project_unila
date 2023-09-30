<div class="modal-content">
    <form action="{{ route('modal.store', ['id' => $data->id, 'type' => 'karya_ilmiah_edit']) }}" method="post">
        @csrf
        {{-- <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}"> --}}
        <div class="modal-header">
            <div class="modal-title">
                <h1>Karya Ilmiah</h1>
            </div>
            <button class="btn btn-close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Judul</label>
                    <input type="text" name="judul" placeholder="Judul" class="form-control" value="{{ $data->judul }}">
                </div>
                <div class="col-md-6">
                    <label>Tahun</label>
                    <input type="date" name="tahun" placeholder="Tahun" class="form-control" value="{{ $data->tahun }}">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Jenis</label>
                    <input type="text" name="jenis" placeholder="Jenis" class="form-control" value="{{ $data->jenis }}">
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
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
