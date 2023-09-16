@extends('layout.main')
@section('alumni')


@if(session('warning_database'))
    <div class="alert alert-danger">
        {{ session('warning_database') }}
    </div>
@endif
@if (session('message_success'))
<div class="alert alert-success">
    {{ session('message_success') }}
</div>
@endif
<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-header py-3">
            <h4 class="card-title mb-0 text-dark">Data Alumni</h4>
            <div class="toolbar">
               <button type="button" data-toggle="modal" data-target="#modal-popout" onclick="do_import()" class="btn btn-primary "><i class="bi bi-plus-lg"></i> Import Data</button>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="myTable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead style="background-color: #F1F1F1;">
                      <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Progam Studi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $id = 1;
                        @endphp
                        @foreach ($data as $row)
                        <tr>
                            <th class="text-center">{{ $id++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nik }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->progam_studi }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade " id="modal-popout" role="dialog">
   <div class="modal-dialog  modal-dialog-popout">
        <div class="modal-content ">
            <div id="content_modal">

                    <div class="modal-header border bg-primary">
                        <div class="modal-title text-light">
                            <h5>Form Input Alumni</h5>
                        </div>
                        <button type="button" class="btn-close" style="bg-transparent"  data-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('importexcel') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <p class="text-secondary-emphasis fw-medium">Template<label class="text-danger">*</label></p>
                                <a href="https://www.mediafire.com/file/1kwtfqflcvin4j3/Buku+3.xlsx/file" class=" btn btn-primary border border-0 rounded-3">Download Template Excel</a>
                            </div>
                            <div class="form-group">
                                <label for="file">Upload File Import</label>
                                <div class="card-body border p-2">
                                    <input type="file" name="file" id="file" required>
                                </div>
                                <label class="text-danger" style="font-size: 13px">*Max 5MB (xlsx)</label>
                            </div>
                            <div class="form-group">
                                <label for="periode">Pilih Periode kelulusan</label>
                                <select class="form-select" name="periode" id="periode" aria-label="Default select example">
                                    <option selected disabled>Pilih Periode kelulusan</option>
                                    <option value="1">Periode 1</option>
                                    <option value="2">Periode 2</option>
                                    <option value="3">Periode 3</option>
                                    <option value="4">Periode 4</option>
                                    <option value="5">Periode 5</option>
                                    <option value="6">Periode 6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tahun_kelulusan">Tahun Kelulusan</label>
                                <input class="w-100 p-2 rounded-3" type="text" name="tahun_kelulusan" id="tahun_kelulusan" placeholder="Masukkan Tahun Kelulusan">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>



            </div>
        </div>
      </div>
    </div>
</div>
@endsection
