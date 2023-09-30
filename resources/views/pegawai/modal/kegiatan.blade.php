<div class="modal fade" id="tambah_kegiatan" style="z-index: 9999">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'kegiatan']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
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
                            <input type="text" name="kegiatan" class="form-control" placeholder="Kegiatan">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tahun</label>
                            <input type="date" name="tahun" class="form-control" placeholder="Tahun">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Peranan</label>
                            <input type="text" name="peranan" class="form-control" placeholder="Peranan">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Kategori</label>
                            <select name="kategori" class="form-control">
                                <option selected>-- Pilih Kategori --</option>
                                <option value="nasional">Nasional</option>
                                <option value="internasional">Internasional</option>
                                <option value="lokal">Lokal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
