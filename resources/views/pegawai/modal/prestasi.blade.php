<div class="modal fade" id="tambah_prestasi" style="z-index: 9999">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'prestasi']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
                <div class="modal-header">
                    <div class="modal-title">
                        <h1>Prestasi</h1>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="organisasi" class="form-label">Prestasi</label>
                                <select name="prestasi" id="prestasi" class="form-control" required="">
                                    <option value="" selected="" disabled="">-- Pilih Prestasi --</option>
                                    <option value="Pembicara Kunci">Pembicara Kunci</option>
                                    <option value="Konsultan">Konsultan</option>
                                    <option value="Editor Jurnal Nasional & Internasional">Editor Jurnal Nasional &amp; Internasional</option>
                                    <option value="Bereputasi">Bereputasi</option>
                                    <option value="Narasumber Nasional & Internasional">Narasumber Nasional &amp; Internasional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="date" name="tahun" id="tahun" placeholder="Tahun" class="form-control">
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
