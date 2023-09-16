@extends('layout.main')
@section('mahasiswa')


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

<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header py-3">
            <h4 class="card-title mb-0 text-dark">Data Mahasiswa</h4>
            <div class="toolbar">
                <a href="{{ route('form') }}" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> Tambah Data
                </a>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table table-bordered" id="table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead style="background-color: #F1F1F1;">
                     <tr>
                        <th class="text-center" width="5%">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NPM</th>
                        <th class="text-center" width="18%">Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($DataMahasiswa as $mahasiswa)
                    <tr>
                        <th class="text-center">{{ $no++ }}</th>
                        <td>{{ $mahasiswa->nama_lengkap }}</td>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td class="text-center text-light">
                            <div class="btn-group" style="height: 35px; width: 90px;">
                                <button class="bg-warning w-50  rounded-left text-light border-0" onclick="showDetails({{ $mahasiswa->id }})">X</button>
                                <button class="bg-primary w-50  border-0" onclick="edits({{ $mahasiswa->id }})"><i class="bi text-light bi-pencil-square"></i></button>
                                <button onclick="deleteMahasiswa('{{ route('mahasiswa.delete', ['id' => $mahasiswa->id]) }}')" class="bg-danger border-0 w-50 rounded-right"><i class="bi text-light bi-trash3"></i></button>
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
<div class="modal fade" id="modal-popout" role="dialog">
   <div class="modal-dialog modal-dialog-popout">
      <div class="modal-content">
         <div id="content_modal"></div>
      </div>
   </div>
</div></div>

@endsection
