<form action="{{ route('edit.details', ['id' => $data->id, 'jenis' => 'dosen_organisasi']) }}" method="post">
    @csrf
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h4>Organisasi</h4>
            </div>
            <button class="btn-close" data-dismiss="">x</button>
        </div>
        <div class="modal-body">
            {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}"> --}}
            <div class="row">
                <div class="col-md-6">
                    <label>organisasi</label>
                    <input type="text" name="organisasi" class="form-control" placeholder="Organisasi" value="{{ $data->organisasi }}">
                </div>
                <div class="col-md-6">
                    <label>Institusi</label>
                    <input type="text" class="form-control" name="institusi" placeholder="Institusi" value="{{ $data->institusi }}">
                </div>
                <div class="col-md-6">
                    <label>Tahun</label>
                    <input type="number" name="tahun" class="form-control" placeholder="Tahun" value="{{ $data->tahun }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
    </div>
</form>
