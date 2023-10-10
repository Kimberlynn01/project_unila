<div class="modal fade" id="modal-dokumen">
    <div class="modal-dialog modal-dialog-popout">
        <div class="modal-content">
            <form action="{{ route('store.dokumen') }}" method="POST" enctype="multipart/form-data">
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="file" class="form-label">Upload File</label>
                                <input type="file" name="dokumen" class="form-control" id="file">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" placeholder="Judul" class="form-control" id="judul">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                                <select name="jenis_dokumen" class="form-control" required="">
                                    <option value="" disabled selected>Pilih Jenis Dokumen</option>
                                    <option value="Pertor Unila">Pertor Unila</option>
                                    <option value="SK Rektor Unila">SK Rektor Unila</option>
                                    <option value="Kebijakan Penjaminan Mutu">Kebijakan Penjaminan Mutu</option>
                                    <option value="Manual Penjaminan Mutu">Manual Penjaminan Mutu</option>
                                    <option value="Formulir Penjaminan Mutu">Formulir Penjaminan Mutu</option>
                                    <option value="Standar Pendidikan (Standar Penjaminan Mutu)">Standar Pendidikan (Standar Penjaminan Mutu)</option>
                                    <option value="Standar Penelitian (Standar Penjaminan Mutu)">Standar Penelitian (Standar Penjaminan Mutu)</option>
                                    <option value="Standar Pengabdian (Standar Penjaminan Mutu)">Standar Pengabdian (Standar Penjaminan Mutu)</option>
                                    <option value="Standar Tata Pamong (Standar Penjaminan Mutu)">Standar Tata Pamong (Standar Penjaminan Mutu)</option>
                                    <option value="Standar MBKM (Standar Tambahan)">Standar MBKM (Standar Tambahan)</option>
                                    <option value="Green Metric (Standar Tambahan)">Green Metric (Standar Tambahan)</option>
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
    </div>
</div>
