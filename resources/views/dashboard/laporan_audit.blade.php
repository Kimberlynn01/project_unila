@extends('layout.main')
@include('laporan_audit.modal.modal')
@section('main')

<div class="row">

    <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session('message_error'))
            <div class="alert alert-danger">
                {{ session('message_error') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>Laporan Audit Mutu Internal</h4>
            </div>
            <div class="toolbar">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-laporan"><i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responesive">
                    <table class="table table-bordered dataTable no-footer" id="table-all">
                        <thead style="background-color: #F1F1F1">
                            <tr>
                                <th>No.</th>
                                <th class="text-center" style="width: 815px">Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;    
                        @endphp
                        <tbody role="grid">
                            @foreach ($data as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->program_studi }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-warning" onclick="detailsButtonLaporan({{ $row->id }})">
                                                <i class="bx bxs-file"></i>
                                            </button>
                                            <button class="btn btn-danger" onclick="deleteData('{{ route('destroy.laporan', ['id' => $row->id]) }}')">
                                                <i class="bx bxs-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
