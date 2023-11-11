@extends('layout.main')

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Ubah Visi Misi UNILA</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('visi_misi.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('visi_misi.update', $data->id) }}" method="post" id="form-edit" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="{{ $data->judul }}" placeholder="Judul">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul" class="form-label">Uraian</label>
                                <textarea name="uraian" id="edit_uraian" placeholder="Uraian">{!! $data->uraian !!}</textarea>
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
