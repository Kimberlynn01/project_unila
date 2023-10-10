@extends('layout.main')
@include('dokumen.modal.modal')
@section('main')


<div class="row">
    <div class="col-12">
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
            <div class="card-header py-3">
                <h4>Data Penjamin Mutu</h4>
            </div>
            <div class="toolbar">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-dokumen"><i class="fa fa-plus"></i> Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responesive">
                    <table class="table table-stripped" id="table-all">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Jenis Dokumen</th>
                                <th>User</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php
                        $no = 1;
                        @endphp
                        <tbody>
                            @foreach ($dokumen_mutu as $row)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->jenis_dokumen }}</td>
                                <td>{{ $row->user }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td class="d-flex justify-content-center">
                                    <div class="btn-group">
                                        <button class="btn btn-primary modal-edit" data-type="modal" data-id="{{ $row->id }}">
                                            <i class="bx bx-edit"></i>
                                        </button>
                                        <button class="btn btn-danger" onclick="deleteData('{{ route('destroy.dokumen', ['id' => $row->id]) }}')">
                                            <i class="bi bi-trash3-fill"></i>
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
        <div class="modal fade" id="modal-popout" role="dialog" style="z-index: 999999;">
            <div class="modal-dialog modal-dialog-popout">
                <div class="modal-content">
                    <div id="modal_content"></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
