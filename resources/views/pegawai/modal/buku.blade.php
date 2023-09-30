<div class="modal fade" style="z-index: 9999" id="tambah_buku">
    <div class="modal-dialog popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'buku']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
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
                                <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="date" class="form-control" id="tahun" name="tahun">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ISBN</label>
                                <input type="text" class="form-control" name="isbn" placeholder="ISBN">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penerbit</label>
                                <input type="text" name="penerbit" placeholder="Penerbit" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
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
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
