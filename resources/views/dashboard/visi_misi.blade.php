@extends('layout.main')

@section('main')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Visi & Misi Unila</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('visi_misi.tambah') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responesive">
                    <table class="table table-striped table-bordered DataTable" id="data-table">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th style="width: 80%">Judul</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('scripts')
    <script src="{{ asset('assets/js/visi_misi/list.js') }}"></script>
@endpush
