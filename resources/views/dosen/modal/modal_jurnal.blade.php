<form action="{{ route('modal.send', ['id' => $dosen_profile->id, 'jenis' => 'jurnal']) }}" method="post">
    @csrf
    <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h2>Jurnal</h2>
            </div>
            <button type="button" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Judul Jurnal</label>
                    <input type="text" class="form-control" name="judul_jurnal" placeholder="Judul Jurnal">
                </div>
                <div class="col-md-6">
                    <label>Nama Jurnal <font color="#be2121" size="1">dimual dalam jurnal</font></label>
                    <input type="text" class="form-control" name="nama_jurnal" placeholder="Nama Jurnal">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Tahun <font color="#be2121" size="1">dimual dalam jurnal</font></label>
                    <input type="number" class="form-control" name="tahun" placeholder="Tahun">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Volume <font color="#be2121" size="1">dimual dalam jurnal</font></label>
                    <input type="number" class="form-control" name="volume" placeholder="Volume">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Nomor Regristrasi <font color="#be2121" size="1">dimual dalam jurnal</font></label>
                    <input type="text" name="no_registrasi" class="form-control" placeholder="Nomor Registrasi">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                        <option selected>-- Pilih Kategori --</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internasional</option>
                        <option value="Lokal">Lokal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
