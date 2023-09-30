<div class="modal fade" id="tambah_penghargaan" tabindex="-1" role="dialog" aria-labelledby="tambah_penghargaan" aria-hidden="true" style="z-index: 9999">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'penghargaan']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
                <div class="modal-header">
                    <div class="modal-title">
                        <h1>Penghargaan</h1>
                    </div>
                    <button class="btn btn-close" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Nama Penghargaan</label>
                            <input type="text" name="penghargaan" class="form-control" placeholder="Nama Penghargaan">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tahun</label>
                            <input type="date" name="tahun" class="form-control" placeholder="Tahun">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label class="form-label">Institusi</label>
                            <input type="text" name="institusi" class="form-control" placeholder="Institusi">
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
