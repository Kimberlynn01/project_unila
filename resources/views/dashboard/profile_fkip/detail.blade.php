@extends('layout.main')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Details Profile FKIP Unila</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('profile.index') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <h2>{{ $data->judul }}</h2>
                <br>
                <br>
                <p>{!! $data->uraian !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
