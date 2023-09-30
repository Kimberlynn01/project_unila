<form action="{{ route('modal.send', ['id' => $dosen_profile->id, 'jenis' => 'prestasi']) }}" method="post">
    @csrf
    <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h5>Prestasi Dosen</h5>
            </div>
            <button class="btn-close" data-dismiss="">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Prestasi</label>
                    <select name="prestasi" id="prestasi" class="form-control" required="">
                        <option value="" selected="" disabled="">-- Pilih Prestasi --</option>
                        <option value="Pembicara Kunci">Pembicara Kunci</option>
                        <option value="Konsultan">Konsultan</option>
                        <option value="Editor Jurnal Nasional &amp; Internasional">Editor Jurnal Nasional &amp; Internasional</option>
                        <option value="Bereputasi">Bereputasi</option>
                        <option value="Narasumber Nasional &amp; Internasional">Narasumber Nasional &amp; Internasional</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                </div>
                <div class="col-md-6">
                    <label>Tahun</label>
                    <input type="date" name="tahun" class="form-control" placeholder="Tahun">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
