<form action="{{ route('edit.details', ['id' => $data->id, 'jenis' => 'dosen_karya']) }}" method="post">
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h2>Karya Ilmiah</h2>
            </div>
            <button type="button" class="btn btn-close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body row">
                <div class="col-md-6">
                    <label for="">Judul Karya Ilmiah</label>
                    <input type="text" name="judul_karya_ilmiah" id="judul_karya_ilmiah" class="form-control" placeholder="Judul Karya Ilmiah" value="{{ $data->judul_karya_ilmiah }}">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="" class="fw-bold">Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun" value="{{ $data->tahun }}">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="" class="fw-bold">Jenis Karya Ilmiah</label>
                    <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Jenis Karya Ilmiah" value="{{ $data->jenis }}">
                </div>
                <div class="col-md-6 mt-4">
                    <label for="">Kategori</label>
                    <select  name="kategori" id="kategori" class="form-control">
                        <option selected>-- Pilih Kategori --</option>
                        <option {{ $data->kategori === 'nasional' ? 'selected' : '' }} value="nasional">Nasional</option>
                        <option {{ $data->kategori === 'internasional' ? 'selected' : '' }} value="internasional">Internasional</option>
                        <option {{ $data->kategori === 'lokal' ? 'selected' : '' }} value="lokal">Lokal</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
    </div>
</form>
