@extends('layout.main')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Laporan Audit Mutu Internal</h4>
            </div>
            <div class="toolbar">
                <a href="{{ route('index.laporan') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="modal-body">
                <div class=" mt-2">

                    <div id="accordion">
                        <!-- Accordion Item 1 -->
                            {{-- @foreach ($data as $row) --}}
                            <div class="card">
                                <div class="card-header" id="heading_4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#tahun_pilih_4_2021" aria-expanded="true" aria-controls="tahun_pilih_4_2021">
                                            {{ $data->tahun }}
                                        </button>
                                        <div>
                                             <button data-toggle="modal" data-target="#modal-popout" class="btn btn-warning btn-md" download=""> <i class="bx bx-edit"></i> </button>                                                 <a href="https://egov.phicos.co.id/lampung/unila/upload/2021/f6ed9ea8f03d7c37e7d954a7e4c00d0c.pdf" class="btn btn-primary btn-md" download=""> <i class="fa fa-download"></i> </a>                                            </div>
                                    </div>
                                </div>
                                <div id="tahun_pilih_4_2021" class="collapse show" aria-labelledby="heading_4" data-parent="#accordion" style="">
                                    <div class="card-body">
                                         <iframe src="{{ $fileUrl }}" width="100%" height="500px"></iframe>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
