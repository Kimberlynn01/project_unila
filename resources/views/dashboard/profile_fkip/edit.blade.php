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
                <h4>Ubah Profile FKIP Unila</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('profile.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.update',$data->id) }}" method="POST" id="form-edit">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" id="judul" value="{{ $data->judul }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="edit_uraian" class="form-label">Uraian</label>
                                <textarea name="uraian" id="edit_uraian">{!! $data->uraian !!}</textarea>
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
    <script src="{{ asset('assets/js/profile_fkip/list.js') }}"></script>
@endpush
