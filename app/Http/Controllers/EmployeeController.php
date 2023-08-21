<?php

namespace App\Http\Controllers;

use App\Imports\EmployeImport;
use App\Models\DomisiliModel;
use App\Models\Employee;
use App\Models\InformasiUmum;
use App\Models\Mahasiswa_ortuModel;
use App\Models\Mahasiswa_PerguruanTinggiModels;
use App\Models\Mahasiswa_SekolahModel;
use App\Models\Mahasiswa_wali;
use App\Models\MInputDataModel;
use Database\Seeders\MInputData;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class EmployeeController extends Controller
{
    public function AlumniController(Request $request) {
        $data = Employee::all();
        return view(
            'dashboard.alumni',compact('data'));
    }

    public function MahasiswaController() {
        $DataMahasiswa = MInputDataModel::all();
        return view('dashboard.mahasiswa',compact('DataMahasiswa'));
    }



    public function InputData(Request $request) {
        try {
            $validateData = $request->validate([
                'npm' => 'required|integer',
                'nama_lengkap' => 'required|string',
                'prodi' => 'required|string',
                'konsentrasi' => 'required|string',
                'periode_masuk' => 'required|string',
                'tahun_kurikulum' => 'required|string',
                'sistem_kuliah' => 'required|string',
                'status' => 'required|string',
                'kelas' => 'required|string',
                'jenis_pendaftaran' => 'required|string',
                'jalur_pendaftaran' => 'required|string',
                'gelombang' => 'required|string',
                'tanggal_masuk' => 'required|string',
                'nomor_tes' => 'required|string',
                'beasiswa' => 'required|string',
                ]);
                MInputDataModel::create($validateData);

                return response()->json(['message' => 'Data 1']);
                // return redirect()->back()->with('message_success', 'Success Menambah Data !!!');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['message_error', 'Data gagal dimasukan ke database']);
            }
        }
    }


    public function inputmahasiswa(Request $request) {

        try {
            $validateData = $request->validate([

                'jenis_kelamin' => 'required',
                'email' => 'required',
                'tempat_lahir' => 'required',
                'status_nikah' => 'required',
                'tanggal_lahir' => 'required',
                'nik' => 'required',
                'agama' => 'required',
                'no_kk' => 'required',
                'suku' => 'required',
                'no_kps' => 'required',
                'golongan_darah' => 'required',
                'pekerjaan' => 'required',
                'berat_badan' => 'required',
                'penghasilan' => 'required',
                'tinggi_badan' => 'required',
                'instansi_pekerjaan' => 'required',
                'no_telp' => 'required',
                'transport' => 'required',
                'no_hp' => 'required',
                'akta_kelahiran' => 'required',
                'email_kampus' => 'required',
                ]);
                InformasiUmum::create($validateData);

                return response()->json(['message' => 'Data 2']);
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['message_error' => '']);
            }
        }
    }

    public function inputdomisili(Request $request) {
        try {
            $validateData = $request->validate([
                'alamat' => 'required',
                'rt' => 'required',
                'rw' => 'required',
                'dusun' => 'required',
                'kelurahan' => 'required',
                'propinsi' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'kewarganegaraan' => 'required',
                'kode_pos' => 'required',
                'status_tinggal' => 'required',
            ]);
            DomisiliModel::create($validateData);

            return response()->json(['message' => 'Data 3']);
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['message_error', '']);
            }
        }
    }

    public function inputortu(Request $request) {
        try {
            $validateData = $request->validate([
                'nama_ayah' => 'required',
                'nik_ayah' => 'required',
                'tgl_lahir_ayah' => 'required',
                'status_hidup_ayah' => 'required',
                'status_kerabatan_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'penghasilan_ayah' => 'required',
                'alamat_ayah' => 'required',
                'no_telp_ayah' => 'required',
                'email_ayah' => 'required',
                'nama_ibu' => 'required',
                'nik_ibu' => 'required',
                'tgl_lahir_ibu' => 'required',
                'status_hidup_ibu' => 'required',
                'status_kerabatan_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'penghasilan_ibu' => 'required',
                'alamat_ibu' => 'required',
                'no_telp_ibu' => 'required',
                'email_ibu' => 'required',
                ]);
                Mahasiswa_ortuModel::create($validateData);

                return response()->json(['message' => 'Data 4']);
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['message_error', '']);
            }
        }
    }

    public function inputwali(Request $request) {
        try {
            $validateData = $request->validate([
                'nama_wali' => 'required',
                'nik_wali' => 'required',
                'tgl_lahir_wali' => 'required',
                'status_hidup_wali' => 'required',
                'status_kerabatan_wali' => 'required',
                'pendidikan_wali' => 'required',
                'pekerjaan_wali' => 'required',
                'penghasilan_wali' => 'required',
                'alamat_wali' => 'required',
                'no_telp_wali' => 'required',
                'email_wali' => 'required',
                ]);
                Mahasiswa_wali::create($validateData);

                return response()->json(['message' => 'Data 5']);
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['message_error', '']);
            }
        }
    }

    public function inputsekolah(Request $request) {


        try {
            $validateData = $request->validate([
                'pendidikan_asal' => 'required',
                'propinsi_sekolah' => 'required',
                'kota_sekolah' => 'required',
                'sekolah' => 'required',
                'nisn' => 'required',
                'alamat_sekolah' => 'required',
                'telp_sekolah' => 'required',
                'nomor_ijasah_sekolah' => 'required',
                'image' => 'mimes:jpeg,png,jpg,pdf,gif',
                ]);

                $file = $request->file('image');

                if ($file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $fileType = $file->getClientOriginalExtension();

                    $file->storeAs('file-upload', $fileName, 'public');

                    $validateData['file_name'] = $fileName;
                    $validateData['file_type'] = $fileType;
                }


                Mahasiswa_SekolahModel::create($validateData);

                return response()->json(['message' => 'Data 6']);
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return response()->json(['message_error', '']);
            }
        }
    }

    public function inputsekolahperguruan(Request $request) {
        $validateData = $request->validate([
            'perguruan_tinggi_asal' => 'required',
            'prodi_asal' => 'required',
            'nim_asal' => 'required',
            'ipk_asal' => 'required',
            'sks_asal' => 'required',
            'surat_rekom_pindah' => 'required',
            'transkrip_pindah' => 'required',
        ]);
        Mahasiswa_PerguruanTinggiModels::create($validateData);

        // return response()->json(['message' => 'Data 7']);
        return redirect('/mahasiswa')->with('message_success', 'Add Data Success');
    }





    public function details($id) {
        $mahasiswa = MInputDataModel::where('id',$id)->first();
        $mahasiswa_umum = InformasiUmum::where('informasi_umum_id',$id)->first();
        $mahasiswa_domisili = DomisiliModel::where('domisili_model_id', $id)->first();
        $mahasiswa_ortu = Mahasiswa_ortuModel::where('mahasiswa_ortu_model_id', $id)->first();
        $mahasiswa_wali = Mahasiswa_wali::where('mahasiswa_wali_id', $id)->first();
        $mahasiswa_sekolah = Mahasiswa_SekolahModel::where('mahasiswa__sekolah_model_id', $id)->first();
        $mahasiswa_perguruan = Mahasiswa_PerguruanTinggiModels::where('mahasiswa_perguruan_id', $id)->first();


        if (!$mahasiswa || !$mahasiswa_umum || !$mahasiswa_domisili || !$mahasiswa_ortu || !$mahasiswa_wali || !$mahasiswa_sekolah || !$mahasiswa_perguruan) {
            abort(404);
        }

        return view('mahasiswa.detail', compact('mahasiswa', 'mahasiswa_umum', 'mahasiswa_domisili', 'mahasiswa_ortu', 'mahasiswa_wali', 'mahasiswa_sekolah', 'mahasiswa_perguruan'));

    }


    public function detailFile($id, $type) {
        $mahasiswa_sekolah = Mahasiswa_SekolahModel::findOrFail($id);
        $mahasiswa = MInputDataModel::where('id',$id)->first();
        $filePath =  'file-upload/' . $mahasiswa_sekolah->file_name;
        $fileUrl = asset('storage/' . $filePath);

        if ($type === 'image') {
            return view('mahasiswa.image', compact('fileUrl', 'mahasiswa_sekolah', 'mahasiswa', 'filePath'));
        } elseif ($type === 'pdf') {
            return view('mahasiswa.pdf', compact('fileUrl', 'mahasiswa_sekolah', 'mahasiswa'));
        }

    }






    public function delete($id_akun) {
        $mahasiswa = MInputDataModel::find($id_akun);

        if (!$mahasiswa) {
            return redirect('/mahasiswa')->with('message_error', 'Data Not Found');
        }

        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('message', 'Success Delete');
    }

    public function edits(Request $request, $id) {
        $mahasiswa = MInputDataModel::find($id);
        $mahasiswa_umum = InformasiUmum::where('informasi_umum_id', $id)->first();
        $mahasiswa_domisili = DomisiliModel::where('domisili_model_id', $id)->first();
        $mahasiswa_ortu = Mahasiswa_ortuModel::where('mahasiswa_ortu_model_id', $id)->first();
        $mahasiswa_wali = Mahasiswa_wali::where('mahasiswa_wali_id', $id)->first();
        $mahasiswa_sekolah = Mahasiswa_SekolahModel::where('mahasiswa__sekolah_model_id', $id)->first();
        $mahasiswa_perguruan = Mahasiswa_PerguruanTinggiModels::where('mahasiswa_perguruan_id', $id)->first();

        if (!$mahasiswa_umum || !$mahasiswa || !$mahasiswa_domisili || !$mahasiswa_ortu || !$mahasiswa_sekolah || !$mahasiswa_perguruan) {
            $mahasiswa = new MInputDataModel();
            $mahasiswa_umum = new InformasiUmum();
            $mahasiswa_domisili = new DomisiliModel();
            $mahasiswa_ortu = new Mahasiswa_ortuModel();
            $mahasiswa_wali = new Mahasiswa_wali();
            $mahasiswa_sekolah = new Mahasiswa_SekolahModel();
            $mahasiswa_perguruan = new Mahasiswa_PerguruanTinggiModels();
        }



        return view('mahasiswa.edit', compact('mahasiswa', 'mahasiswa_umum', 'mahasiswa_domisili', 'mahasiswa_ortu', 'mahasiswa_wali', 'mahasiswa_sekolah', 'mahasiswa_perguruan'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa_sekolah = Mahasiswa_SekolahModel::findOrFail($id);
        $mahasiswa = MInputDataModel::find($id);
        $mahasiswa_umum = InformasiUmum::where('informasi_umum_id', $id)->first();
        $mahasiswa_domisili = DomisiliModel::where('domisili_model_id', $id)->first();
        $mahasiswa_ortu = Mahasiswa_ortuModel::where('mahasiswa_ortu_model_id', $id)->first();
        $mahasiswa_wali = Mahasiswa_wali::where('mahasiswa_wali_id', $id)->first();
        $mahasiswa_sekolah = Mahasiswa_SekolahModel::where('mahasiswa__sekolah_model_id', $id)->first();
        $mahasiswa_perguruan = Mahasiswa_PerguruanTinggiModels::where('mahasiswa_perguruan_id', $id)->first();


        if ($request->hasFile('image')) {
            Storage::delete('file-upload/' . $mahasiswa_sekolah->file_name);

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-upload', $fileName, 'public');

            $validateData['file_name'] = $fileName;
            $validateData['file_type'] = $fileType;
            $mahasiswa_sekolah->update($validateData);
        }




        $mahasiswa->update($request->all());
        $mahasiswa_umum->update($request->all());
        $mahasiswa_domisili->update($request->all());
        $mahasiswa_ortu->update($request->all());
        $mahasiswa_wali->update($request->all());
        $mahasiswa_sekolah->update($request->all());
        $mahasiswa_perguruan->update($request->all());

        return response()->json(['message' => 'Data Success Update']);
    }






    public function importexcel(Request $request) {
        try {
            $data = $request->file('file');
            $namafile = $data->getClientOriginalName();
            $data->move('EmployeeData', $namafile);

            FacadesExcel::import(new EmployeImport, public_path('/EmployeeData/'.$namafile));
            // Session::flash('success_database', 'Data berhasil diimpor.');

            return redirect()->back()->with('message_success', 'Add database to table success');

        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return back()->with('warning_database', 'Data dengan nilai yang sama sudah ada dalam database.');
            }
        }
    }
}
