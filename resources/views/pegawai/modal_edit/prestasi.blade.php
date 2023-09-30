<div class="modal-content">
    <form action="{{ route('modal.store', ['id' => $data->id, 'type' => 'prestasi_edit']) }}" method="post">
        @csrf
        {{-- <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}"> --}}
        <div class="modal-header">
            <div class="modal-title">
                <h1>Prestasi</h1>
            </div>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="organisasi" class="form-label">Prestasi</label>
                        <select name="prestasi" id="prestasi" class="form-control" required="">
                            <option value="" selected="" disabled="">-- Pilih Prestasi --</option>
                            <option {{ $data->prestasi === 'Pembicara Kunci' ? 'selected' : '' }} value="Pembicara Kunci">Pembicara Kunci</option>
                            <option {{ $data->prestasi === 'Konsultan' ? 'selected' : '' }} value="Konsultan">Konsultan</option>
                            <option {{ $data->prestasi === 'Editor Jurnal Nasional & Internasional' ? 'selected' : '' }} value="Editor Jurnal Nasional & Internasional">Editor Jurnal Nasional &amp; Internasional</option>
                            <option {{ $data->prestasi === 'Bereputasi' ? 'selected' : '' }} value="Bereputasi">Bereputasi</option>
                            <option {{ $data->prestasi === 'Narasumber Nasional & Internasional' ? 'selected' : '' }} value="Narasumber Nasional & Internasional">Narasumber Nasional &amp; Internasional</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control" value="{{ $data->keterangan }}">
                </div>
                <div class="col-md-6">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="date" name="tahun" id="tahun" placeholder="Tahun" class="form-control" value="{{ $data->tahun }}">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
