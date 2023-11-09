@extends('layout.main')
@include('monev_pembelajaran.modal.modal')

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title mb-0 text-dark">Monev Pembelajaran</h4>
                    <div class="toolbar">
                        <button type="button" data-toggle="modal" data-target="#modal-monev" class="btn btn-primary "><i
                                class="fa fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table-all"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead style="background-color: #F1F1F1;">
                                <tr>
                                    <th class="text-center" width="5%">No</th>
                                    <th class="text-center">Program Studi</th>
                                    <th class="text-center">Semester</th>
                                    <th class="text-center">Periode</th>
                                    <th class="text-center">Tahun Ajaran</th>
                                    <th class="text-center" width="15%">Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody role="grid">
                                @foreach ($datamonev as $row)
                                    <tr>

                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->prodi }}</td>
                                        <td>{{ $row->semester }}</td>
                                        <td>{{ $row->priode }}</td>
                                        <td>{{ $row->tahun }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning tombol-edit-monev"s
                                                    data-id="{{ $row->id }}">
                                                    <i class="bx bxs-file"></i>
                                                </button>
                                                <button class="btn btn-danger"
                                                    onclick="deleteData('{{ route('monev.delete', ['id' => $row->id]) }}')">
                                                    <i class="bx bxs-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                @endforeach
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="modal-popout" role="dialog">
                        <div class="modal-dialog modal-dialog-popout">
                            <div class="modal-content">
                                <div id="content_modal"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
