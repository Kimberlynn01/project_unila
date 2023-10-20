<div class="modal-content">
    <form action="{{ route('update.survei', ['id' => $datasurvei->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden">
        <div class="modal-header bg-primary">
            <h4 class="text-light">Laporan Audit Form</h4>
            <button class="btn btn-close text-light" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $datasurvei->judul }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Lampiran File</label>
                        <input type="file" name="pas_file" class="form-control">
                        <label class="text-danger" style="font-size: 13px">*Max 2MB( pdf | png | jpg | jpeg
                            )</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-close bg-secondary text-light" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
</div>
