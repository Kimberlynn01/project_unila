@extends('layout.main')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Profile FKIP Unila</h4>
            </div>
            <div class="toolbar">
                <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/profile_fkip/list.js') }}"></script>
@endpush
