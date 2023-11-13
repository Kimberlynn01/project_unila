@extends('layout.main')

@section('main')
    @include('survei_kepuasan.modal.modal')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header py-3">
                    <h4 class="card-title mb-0 text-dark">Laporan Survei Kepuasan Masyarakat</h4>
                    <div class="toolbar">
                        <button type="button" data-toggle="modal" data-target="#modal-survei" class="btn btn-primary "><i
                                class="fa fa-plus"></i>Tambah Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table-all"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead style="background-color: #F1F1F1;">
                                <tr>
                                    <th class="text-center" width="5%">No</th>
                                    <th class="text-center" width="40%">Judul</th>
                                    <th class="text-center" width="40%">File Laporan Survei</th>
                                    <th class="text-center" width="15%">Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>

                                @foreach ($datasurvei as $row)
                                    <tr>
                                        <th>{{ $no++ }}</th>
                                        <td>{{ $row->judul }}</td>
                                        <td  class="d-flex justify-content-center">
                                            {{-- <button class="btn btn-primary tombol-edit-survei">Lihat File</button> --}}
                                            <a href="{{ asset('storage/' . $row->pas_file) }}" target="_blank" class="btn btn-primary">Lihat File</a>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning tombol-edit-survei"
                                                    data-id="{{ $row->id }}">
                                                    <i class="bx bxs-file"></i>
                                                </button>
                                                <button class="btn btn-danger"
                                                    onclick="deleteData('{{ route('survei.delete', ['id' => $row->id]) }}')">
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
                <div class="modal fade" id="modal-popout-survei" role="dialog">
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
