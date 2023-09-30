<div class="modal fade" style="z-index: 9999" id="tambah_jurnal">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'jurnal']) }}" method="post">
            @csrf
            <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h1>Jurnal</h1>
                    </div>
                    <button class="btn btn-close" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Judul Jurnal</label>
                            <input type="text" name="judul_jurnal" placeholder="Judul Jurnal" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Nama Jurnal <font color="red">dimual dalam jurnal</font> </label>
                            <input type="text" name="nama_jurnal" placeholder="Nama Jurnal" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Tahun</label>
                            <input type="date" name="tahun" placeholder="Judul Jurnal" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Volume</label>
                            <input type="text" name="volume" placeholder="Judul Jurnal" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>No Registrasi</label>
                            <input type="text" name="no_registrasi" placeholder="Judul Jurnal" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Kategori</label>
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
            </div>
        </form>
    </div>
</div>
