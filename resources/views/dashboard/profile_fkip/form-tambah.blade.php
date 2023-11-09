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
                    <h4>Form Tambah Profile FKIP UNILA</h4>
                </div>
                <div class="toolbar">
                    <a href="{{ route('profile.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="post" id="form-tambah">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="judul" class="form-label">Uraian</label>
                                    <textarea id="uraian" name="uraian"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/profile_fkip/list.js') }}"></script>
@endpush
