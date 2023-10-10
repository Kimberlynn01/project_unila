<div class="modal-content">
    <form action="{{ route('modal.store', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="name" value="{{ Auth::user()->username }}"> --}}
        <input type="hidden" name="user" value="{{ auth()->user()->username }}">
        <div class="modal-header bg-primary">
            <div class="modal-title">
                <h5 class="text-light">Tambah Data Dokumen</h5>
            </div>
            <button class="btn btn-close text-light" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="file" class="form-label">Lihat Dokumen Lama</label>
                        <a class="btn btn-warning" href="{{ $fileUrl }}" target="_blank">Lihat Dokumen</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="file" class="form-label">Upload File</label>
                        <input type="file" name="dokumen" class="form-control" id="file">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" placeholder="Judul" class="form-control" id="judul" value="{{ $data->judul }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                        <select name="jenis_dokumen" class="form-control" required="">
                            <option value="" disabled selected>Pilih Jenis Dokumen</option>
                            <option {{ $data->jenis_dokumen === 'Pertor Unila' ? 'selected' : '' }} value="Pertor Unila">Pertor Unila</option>
                            <option {{ $data->jenis_dokumen === 'SK Rektor Unila' ? 'selected' : '' }} value="SK Rektor Unila">SK Rektor Unila</option>
                            <option {{ $data->jenis_dokumen === 'Kebijakan Penjaminan Mutu' ? 'selected' : '' }} value="Kebijakan Penjaminan Mutu">Kebijakan Penjaminan Mutu</option>
                            <option {{ $data->jenis_dokumen === 'Manual Penjaminan Mutu' ? 'selected' : '' }} value="Manual Penjaminan Mutu">Manual Penjaminan Mutu</option>
                            <option {{ $data->jenis_dokumen === 'Formulir Penjaminan Mutu' ? 'selected' : '' }} value="Formulir Penjaminan Mutu">Formulir Penjaminan Mutu</option>
                            <option {{ $data->jenis_dokumen === 'Standar Pendidikan (Standar Penjaminan Mutu)' ? 'selected' : '' }} value="Standar Pendidikan (Standar Penjaminan Mutu)">Standar Pendidikan (Standar Penjaminan Mutu)</option>
                            <option {{ $data->jenis_dokumen === 'Standar Penelitian (Standar Penjaminan Mutu)' ? 'selected' : '' }} value="Standar Penelitian (Standar Penjaminan Mutu)">Standar Penelitian (Standar Penjaminan Mutu)</option>
                            <option {{ $data->jenis_dokumen === 'Standar Pengabdian (Standar Penjaminan Mutu)' ? 'selected' : '' }} value="Standar Pengabdian (Standar Penjaminan Mutu)">Standar Pengabdian (Standar Penjaminan Mutu)</option>
                            <option {{ $data->jenis_dokumen === 'Standar Tata Pamong (Standar Penjaminan Mutu)' ? 'selected' : '' }} value="Standar Tata Pamong (Standar Penjaminan Mutu)">Standar Tata Pamong (Standar Penjaminan Mutu)</option>
                            <option {{ $data->jenis_dokumen === 'Standar MBKM (Standar Tambahan)' ? 'selected' : '' }} value="Standar MBKM (Standar Tambahan)">Standar MBKM (Standar Tambahan)</option>
                            <option {{ $data->jenis_dokumen === 'Green Metric (Standar Tambahan)' ? 'selected' : '' }} value="Green Metric (Standar Tambahan)">Green Metric (Standar Tambahan)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
