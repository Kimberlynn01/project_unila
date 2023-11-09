@extends('layout.main')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Profile FKIP Unila</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('profile.form_tambah') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered DataTable" id="data-table">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th width="90%" class="text-center">Judul</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/profile_fkip/list.js') }}"></script>
@endpush
