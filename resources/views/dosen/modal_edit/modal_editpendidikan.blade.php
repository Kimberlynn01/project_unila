<form action="{{ route('edit.details', ['id' => $data->id, 'jenis' => 'dosen_pendidikan']) }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $data->id }}"> --}}
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}"> --}}
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h3>Pendidikan</h3>
            </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label class="fw-bold">Nama Universitas</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="universitas" placeholder="Universitas" value="{{ $data->universitas }}">
                </div>
                <div class="col-md-6">
                    <label class="fw-bold">Fakultas</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="fakultas" placeholder="Fakultas" value="{{ $data->fakultas }}">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Progam Studi</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="prodi" placeholder="Progam Studi" value="{{ $data->prodi }}">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Jenjang Pendidikan</label>
                    <select name="jenjang" id="jenjang" class="form-control">
                        <option selected>-- Pilih Jenjang Pendidikan</option>
                        <option {{ $data->jenjang == 'D3' ? 'selected' : ''}} value="D3">D3</option>
                        <option {{ $data->jenjang == 'D4' ? 'selected' : ''}} value="D4">D4</option>
                        <option {{ $data->jenjang == 'S1' ? 'selected' : ''}} value="S1">S1</option>
                        <option {{ $data->jenjang == 'S2' ? 'selected' : ''}} value="S2">S2</option>
                        <option {{ $data->jenjang == 'S3' ? 'selected' : ''}} value="S3">S3</option>
                    </select>
                    <br>
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Tahun Lulus</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="number" name="tahun_lulus" placeholder="Tahun Kelulusan" value="{{ $data->tahun_lulus }}">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Update Data</button>
        </div>
    </div>
</form>
