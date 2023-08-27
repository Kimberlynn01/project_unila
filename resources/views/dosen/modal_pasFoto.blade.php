<form action="{{ route('dosen.foto', $dosen_profile->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
    <div class="modal-header">
        <div class="modal-title">
            <h2>Ganti Foto Profile</h2>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-md-3">
                <h5>Input Foto</h5>
            </div>
            <div class="col-md-6 border border-4 p-2">
                <input type="file" accept=".jpg,.png,.gif" title="Input Foto" name="pas_foto" id="pas_foto">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="pas_foto">
            Simpan
        </button>
    </div>
</div>

</form>
