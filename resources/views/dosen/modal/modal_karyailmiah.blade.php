<form action="{{ route('karya.send') }}" method="post" >
    @csrf
    <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h2>Karya Ilmiah</h2>
            </div>
            <button type="button" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label for="karyaIlmiah">Judul Karya Ilmiah</label>
                    <input type="text" name="judul_karya_ilmiah" class="form-control" placeholder="Judul Karya Ilmiah">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="KaryaIlmiah" class="fw-bold">Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun">
                </div>
                <div class="col-md-6 mt-2">
                    <label for="KaryaIlmiah" class="fw-bold">Jenis Karya Ilmiah</label>
                    <input type="text" name="jenis" class="form-control" placeholder="Jenis Karya Ilmiah">
                </div>
                <div class="col-md-6 mt-4">
                    <label for="">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required="">
                        <option value="" selected="" disabled="">-- Pilih Kategori --</option>
                        <option value="nasional">Nasional</option>
                        <option value="internasional">Internasional</option>
                        <option value="lokal">Lokal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
