<div class="modal fade" id="tambah_pendidikan" style="z-index: 9999999">
    <div class="modal-dialog modal-dialog-popout modal-xl">
        <div class="modal-content">
            <form action="{{ route('modal.store', ['id' => $pegawai->id, 'type' => 'pendidikan']) }}" method="post">
                @csrf
                <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
                <div class="modal-header">
                    <div class="modal-title">
                        <h1>Pendidikan</h1>
                    </div>
                    <button type="button" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Nama Universitas</label>
                                <input type="text" class="form-control" name="universitas" placeholder="Nama Universitas">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Fakultas</label>
                                <input type="text" name="fakultas" class="form-control" placeholder="Fakultas">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label>Progam Studi</label>
                                <input type="text" name="progam_studi" class="form-control" placeholder="Progam Studi">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label class="form-label">Jenjang Pendidikan</label>
                                <select class="form-control" name="jenjang_pendidikan">
                                    <option selected>-- Pilih Jenjang Pendidikan --</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label class="form-label">Tahun Lulus</label>
                                <input type="date" name="tahun" class="form-control" placeholder="Tahun Lulus">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
