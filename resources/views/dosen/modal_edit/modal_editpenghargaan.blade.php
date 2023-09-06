<form action="{{ route('edit.edit.penghargaan', $dosen_penghargaan->id) }}" method="post">
    @csrf
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_pendidikan->id }}"> --}}
    {{-- <input type="hidden" name="dosen_id" value="{{ $dosen_profile->id }}"> --}}
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
                <h3>Penghargaan</h3>
            </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <label class="fw-bold">Nama Penghargaan</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="nama_penghargaan" placeholder="Nama Penghargaan" value="{{ $dosen_penghargaan->nama_penghargaan }}">
                </div>
                <div class="col-md-6">
                    <label class="fw-bold">Tahun</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="tahun" placeholder="Tahun" value="{{ $dosen_penghargaan->tahun }}">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Institusi</label>
                    <br>
                    <input class="w-100 p-2" style="border: solid 1px; color: rgba(128, 128, 128, 0.704); border-radius: 5px;" type="text" name="institusi" placeholder="Institusi" value="{{ $dosen_penghargaan->institusi }}">
                </div>
                <div class="col-md-4 pt-3">
                    <label class="fw-bold">Kategori</label>
                    <select name="kategori" id="kategori" class="form-control" required="">
                        <option value="" selected="" disabled="">-- Pilih Kategori Penghargaan --</option>
                        <option {{ $dosen_penghargaan->kategori === 'nasional' ? 'selected' : '' }} value="nasional">Nasional</option>
                        <option {{ $dosen_penghargaan->kategori === 'internasional' ? 'selected' : '' }} value="internasional">Internasional</option>
                        <option {{ $dosen_penghargaan->kategori === 'lokal' ? 'selected' : '' }} value="lokal">Lokal</option>
                    </select>
                    <br>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Tambah Data</button>
        </div>
    </div>
</form>
