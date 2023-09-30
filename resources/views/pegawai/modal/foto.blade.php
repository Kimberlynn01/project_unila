<div class="modal fade" id="modal-foto" style="z-index: 999999">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'foto']) }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h1>Foto</h1>
                    </div>
                    <button type="button" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Foto</label>
                            <input type="file" accept=".jpg,.png,.gif" name="foto" id="foto" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Ganti Foto</button>
                </div>
            </div>
        </form>
    </div>
</div>

