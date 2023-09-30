<form action="{{ route('edit.details', ['id' => $data->id, 'jenis' => 'dosen_prestasi']) }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}"> --}}
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h5>Prestasi Dosen</h5>
            </div>
            <button class="btn-close" data-dismiss="">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Prestasi</label>
                    <select name="prestasi" id="prestasi" class="form-control" required="">
                        <option selected>-- Pilih Prestasi --</option>
                        <option {{ $data->prestasi === 'Pembicara Kunci' ? 'selected' : '' }} value="Pembicara Kunci">Pembicara Kunci</option>
                        <option {{ $data->prestasi === 'Konsultan' ? 'selected' : '' }} value="Konsultan">Konsultan</option>
                        <option {{ $data->prestasi === 'Editor Jurnal Nasional &amp; Internasional' ? 'selected' : '' }} value="Editor Jurnal Nasional &amp; Internasional">Editor Jurnal Nasional &amp; Internasional</option>
                        <option {{ $data->prestasi === 'Bereputasi' ? 'selected' : '' }} value="Bereputasi">Bereputasi</option>
                        <option {{ $data->prestasi === 'Narasumber Nasional &amp; Internasional' ? 'selected' : '' }} value="Narasumber Nasional &amp; Internasional">Narasumber Nasional &amp; Internasional</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $data->keterangan }}">
                </div>
                <div class="col-md-6">
                    <label>Tahun</label>
                    <input type="date" name="tahun" class="form-control" placeholder="Tahun" value="{{ $data->tahun }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
    </div>
</form>
