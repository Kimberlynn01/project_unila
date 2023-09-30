<div class="modal-content">
    <form action="{{ route('modal.store', ['id' => $data->id, 'type' => 'jabatan_edit']) }}" method="post">
        @csrf
        <div class="modal-header">
            <div class="modal-title">
                <h1>Jabatan</h1>
            </div>
            <button class="btn btn-close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
                {{-- <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}"> --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" name="jabatan" id="jabatan" placeholder="Jabatan" class="form-control" value="{{ $data->jabatan }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="institusi" class="form-label">Institusi</label>
                            <input type="text" name="institusi" id="institusi" placeholder="Institusi" class="form-control" value="{{ $data->institusi }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tahun" class="form-label">Tahun</label>
                            <input type="date" name="tahun" id="tahun" class="form-control" value="{{ $data->tahun }}">
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
