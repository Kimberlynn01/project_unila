@extends('layout.main')
@section('mahasiswa')


<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header py-3">
            <h4 class="card-title mb-0 text-dark">Details File Mahasiswa</h4>
            <div class="toolbar">
                <a onclick="showDetails({{ $mahasiswa->id }})" class="btn btn-primary">
                    Kembali
                </a>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive d-flex justify-content-center">
               {{-- <img class="rounded-circle w-50" src="{{ asset('storage/file-upload/' . $mahasiswa->file_name) }}" alt="Ijazah Sklh"> --}}
               <img class="rounded-circle w-50" src="{{ $fileUrl }}" alt="">
            </div>
         </div>
      </div>
   </div>
</div>

@endsection
