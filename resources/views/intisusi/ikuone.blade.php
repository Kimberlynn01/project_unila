@extends('layout.main')
@section('main')
<div class="row">

   <div class="col-12">
      @if (session('message_error'))
        <div class="alert alert-danger">
            {{ session('message_error') }}
        </div>
      @endif
      @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
      @endif
      <div class="card">
         <div class="card-header py-3">
            <h4 class="card-title mb-0 text-dark">IKU 1</h4>

            <div class="toolbar">
               <button type="button" data-toggle="modal" data-target="#modal-popout" class="btn btn-success "><i class="fa fa-download"></i> Import Data</button>
               <button type="button" data-toggle="modal" onclick="_form()" class="btn btn-primary "><i class="fa fa-plus"></i> Tambah Data</button>
            </div>
         </div>
         <div class="card-body">
            <label for="klasifikasi">
               <p color="red">Sub Klasifikasi</p>
            </label>
            <select class="form-control col-12" id="klasifikasi" name="klasifikasi">
               <option value="a" >Lulusan mendapatkan pekerjaan yang layak (masa tunggu &lt;6 bulan)</option>
               <option value="b">Lulusan yang Melanjutkan Studi</option>
               <option value="c">Lulusan Berwirausaha</option>
            </select>
            <br>
            <div class="table-responsive">
                <table class="display table table-bordered dataTable no-footer" id="table_iku_one" style="border-collapse: collapse; border-spacing: 0px; width: 0%;" >
                  <thead style="background-color: #F1F1F1;">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Prodi</th>
                        <th>Fakultas</th>
                        <th>No Ijazah</th>
                        <th>Masa Tunggu</th>
                        <th>Nama Perusahaan</th>
                        <th>Provinsi</th>
                        <th>Gaji</th>
                        <th>Nama/Bidang Usaha</th>
                        <th>Pendapatan</th>
                        <th>Tempa</th>
                        <th>Melanjutkan Studi Jenjang</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php $no = 1; ?>
                    <tbody>

                        @foreach ($ikuOne as $row)
                        <tr data-klasifikasi="a">
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->npm }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->ijasah }}</td>
                            <td>{{ $row->masa_tggu }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->gaji }}</td>
                            <td>{{ $row->usaha }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->tempa }}</td>
                            <td>{{ $row->jenjang }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="p-2 btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="p-2 btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @foreach ($ikuOneb as $row)
                        <tr data-klasifikasi="b">
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->npm }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->ijasah }}</td>
                            <td>{{ $row->masa_tggu }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->gaji }}</td>
                            <td>{{ $row->usaha }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->tempa }}</td>
                            <td>{{ $row->jenjang }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="p-2 btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="p-2 btn btn-danger"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @foreach ($ikuOneC as $row)
                        <tr data-klasifikasi="c">
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->npm }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->fakultas }}</td>
                            <td>{{ $row->ijasah }}</td>
                            <td>{{ $row->masa_tggu }}</td>
                            <td>{{ $row->nama_pt }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->gaji }}</td>
                            <td>{{ $row->usaha }}</td>
                            <td>{{ $row->pendapatan }}</td>
                            <td>{{ $row->tempa }}</td>
                            <td>{{ $row->jenjang }}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="p-2 btn btn-primary"><i class="fa fa-edit"></i></button>
                                    <button class="p-2 btn btn-danger"><i class="fa fa-trash"></i></button>
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

<form action="{{ route('iku.one.import') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modal-popout" role="dialog">
        <div class="modal-dialog modal-dialog-popout">
           <div class="modal-content">
              <div id="content_modal">
                 <div class="modal-header bg-primary">
                     <div class="modal-title">
                         <h3 class="text-light">Import Data Mahasiswa</h3>
                     </div>
                     <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body fw-bold">
                     <h6>Template <label for="template" style="color: red">*</label></h6>
                     <a href="https://egov.phicos.co.id/tema/Skote_v2.1.0/HTML/Admin/dist/assets/excel/iku1.xlsx" class="text-light bg-primary" style="padding: 10px; border-radius: 10px">Download Template Excel</a>
                     <br>
                     <label for="input" class="mt-4">Upload File Import</label>
                     <input type="file" id="file" accept=".xlsx" name="file" class="form-control" style="border: solid 1px rgba(114, 114, 114, 0.281);" required>
                     <label for="input" style="color: red; font-weight: 400">*Max 5Mb (xlsx)</label>
                     <br>
                     <h6 class="mt-2">Sub Klasifikasi</h6>
                     <select class="form-control col-12" id="klasifikasi" name="klasifikasi">
                         <option value="a" selected>Lulusan mendapatkan pekerjaan yang layak (masa tunggu &lt;6 bulan)</option>
                         <option value="b">Lulusan yang Melanjutkan Studi</option>
                         <option value="c">Lulusan Berwirausaha</option>
                      </select>
                 </div>
                 <div class="modal-footer">
                     <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                     <button type="submit" class="btn btn-primary">Import</button>
                 </div>
             </div>
           </div>
        </div>
     </div>
    </form>
@endsection
