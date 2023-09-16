
<form action="{{ route('edit.details', ['id' => $data->id, 'jenis' => 'dosen_buku']) }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}"> --}}
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h3>Buku</h3>
            </div>
            <button type="button" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Judul buku</label>
                    <input type="text" name="judul_buku" class="form-control" placeholder="Judul buku" value="{{ $data->judul_buku }}">
                </div>
                <div class="col-md-6">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="{{ $data->tahun }}">
                </div>
                <div class="col-md-6">
                    <label>ISBN</label>
                    <input type="text" name="isbn" class="form-control" placeholder="ISBN" value="{{ $data->isbn }}">
                </div>
                <div class="col-md-6">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" value="{{ $data->penerbit }}">
                </div>
                <div class="col-md-6">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option selected>-- Pilih Kategori --</option>
                        <option {{ $data->kategori === 'Nasional' ? 'selected' : '' }} value="Nasional">Nasional</option>
                        <option {{ $data->kategori === 'Internasional' ? 'selected' : '' }} value="Internasional">Internasional</option>
                        <option {{ $data->kategori === 'Lokal' ? 'selected' : '' }} value="Lokal">Lokal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
