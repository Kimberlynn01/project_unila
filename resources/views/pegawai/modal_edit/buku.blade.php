<div class="modal-content">
    <form action="{{ route('modal.store', ['id' => $data->id, 'type' => 'buku_edit']) }}" method="post">
        @csrf
        {{-- <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}"> --}}
        <div class="modal-header">
            <div class="modal-title">
                <h5>Buku</h5>
            </div>
            <button class=" btn btn-close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label >Buku</label>
                        <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" value="{{ $data->judul_buku }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="date" class="form-control" id="tahun" name="tahun" value="{{ $data->tahun }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ISBN</label>
                        <input type="text" class="form-control" name="isbn" placeholder="ISBN" value="{{ $data->isbn }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" placeholder="Penerbit" class="form-control" value="{{ $data->penerbit }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control">
                            <option selected>-- Pilih Kategori --</option>
                            <option {{ $data->kategori === 'nasional' ? 'selected' : '' }} value="nasional">Nasional</option>
                            <option {{ $data->kategori === 'internasional' ? 'selected' : '' }} value="internasional">Internasional</option>
                            <option {{ $data->kategori === 'lokal' ? 'selected' : '' }} value="lokal">Lokal</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
