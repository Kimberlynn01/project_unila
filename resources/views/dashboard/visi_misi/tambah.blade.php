@extends('layout.main')

@section('main')
<style>
    .ck-editor__editable {
    min-height: 200px !important; /* Ganti nilai ini sesuai kebutuhan */
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Visi Misi UNILA</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('visi_misi.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('visi_misi.store') }}" method="post" enctype="multipart/form-data" id="form-tambah">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Uraian</label>
                                <textarea name="uraian" id="uraian" placeholder="Uraian"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('assets/js/visi_misi/list.js') }}"></script>
@endpush
