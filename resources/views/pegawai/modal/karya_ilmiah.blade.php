<div class="modal fade" id="tambah_karya_ilmiah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'karya_ilmiah']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
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
                            <input type="text" name="judul" placeholder="Judul" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Tahun</label>
                            <input type="date" name="tahun" placeholder="Tahun" class="form-control">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Jenis</label>
                            <input type="text" name="jenis" placeholder="Jenis" class="form-control">
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
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
