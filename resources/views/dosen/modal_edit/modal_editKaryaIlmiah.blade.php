<form action="{{ route('edit.edit.karyaIlmiah', $dosen_karyaIlmiah->id) }}" method="post" >
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h2>Karya Ilmiah</h2>
            </div>
            <button class="btn btn-close" data-bs-dismiss="modal" data-modal="Close">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="karyaIlmiah">Judul Karya Ilmiah</label>
                    <input type="text" name="judul_karya_ilmiah" class="form-control" placeholder="Judul Karya Ilmiah" value="{{ $dosen_karyaIlmiah->judul_karya_ilmiah }}">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="KaryaIlmiah" class="fw-bold">Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="{{ $dosen_karyaIlmiah->tahun }}">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="KaryaIlmiah" class="fw-bold">Jenis Karya Ilmiah</label>
                    <input type="text" name="jenis" class="form-control" placeholder="Jenis Karya Ilmiah" value="{{ $dosen_karyaIlmiah->jenis }}">
                </div>
                <div class="col-md-6 mt-4">
                    <label for="">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required="">
                        <option value="" selected="" disabled="">-- Pilih Kategori --</option>
                        <option {{ $dosen_karyaIlmiah->kategori === 'nasional' ? 'selected' : '' }} value="nasional">Nasional</option>
                        <option {{ $dosen_karyaIlmiah->kategori === 'internasional' ? 'selected' : '' }} value="internasional">Internasional</option>
                        <option {{ $dosen_karyaIlmiah->kategori === 'lokal' ? 'selected' : '' }} value="lokal">Lokal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
