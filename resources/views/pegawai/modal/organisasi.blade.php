<div class="modal fade" style="z-index: 99999999" id="tambah_organisasi">
    <div class="modal-dialog popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'organisasi']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
                <div class="modal-header">
                    <div class="modal-title">
                        <h1>Organisasi</h1>
                    </div>
                    <button class="btn btn-close " data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="organisasi" class="form-label">Organisasi</label>
                                <input type="text" name="organisasi" id="organisasi" placeholder="Organisasi" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="institusi" class="form-label">Institusi</label>
                                <input type="text" name="institusi" id="institusi" placeholder="Institusi" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="date" name="tahun" id="tahun" placeholder="Tahun" class="form-control">
                            </div>
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
