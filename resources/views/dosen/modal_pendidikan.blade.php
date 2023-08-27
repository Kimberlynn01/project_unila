<form action="{{ route('input.data.details.dosen.pendidikan') }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_pendidikan->id }}"> --}}
    <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h3>Pendidikan</h3>
            </div>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label class="fw-bold">Nama Universitas</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="universitas" placeholder="Universitas">
                </div>
                <div class="col-md-6">
                    <label class="fw-bold">Fakultas</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="fakultas" placeholder="Fakultas">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Progam Studi</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="prodi" placeholder="Progam Studi">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Jenjang Pendidikan</label>
                    <select name="jenjang" id="jenjang" class="form-control">
                        <option value="" selected>-- Pilih Jenjang Pendidikan</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                    <br>
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Tahun Lulus</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="number" name="tahun_lulus" placeholder="Tahun Kelulusan">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Tambah Data</button>
        </div>
    </div>
</form>
