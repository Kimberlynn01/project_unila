<form action="{{ route('modal.send', ['id' => $dosen_profile->id, 'jenis' => 'penelitian']) }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_pendidikan->id }}"> --}}
    <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h3>Penelitian</h3>
            </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label class="fw-bold">Judul Penelitian</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="judul_penelitian" placeholder="Judul Penelitian">
                </div>
                <div class="col-md-6">
                    <label class="fw-bold">Jabatan</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="jabatan" placeholder="Jabatan">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Tahun Penelitian</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="tahun" placeholder="Tahun Penelitian">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Sumber Dana</label>
                    <select name="sumber_dana" id="sumber_dana" class="form-control" required="">
                        <option value="" selected="" disabled="">-- Pilih Sumber Dana</option>
                        <option value="dana mandiri">Dana Mandiri</option>
                        <option value="dikti">DIKTI</option>
                        <option value="dipa">DIPA</option>
                    </select>
                    <br>
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Kategori</label>
                    <br>
                    <select name="kategori" id="kategori" class="form-control" required="">
                        <option value="" selected="" disabled="">-- Pilih Kategori Penelitian</option>
                        <option value="nasional">Nasional</option>
                        <option value="internasional">Internasional</option>
                        <option value="lokal">Lokal</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Tambah Data</button>
        </div>
    </div>
</form>
