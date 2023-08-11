<?php

namespace App\Http\Controllers;

use App\Imports\EmployeImport;
use App\Models\Employee;
use App\Models\MInputDataModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
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

    public function FormController() {
        return redirect(
            '/form'
        );
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
                return redirect('/mahasiswa')->with('message_success', 'Success Menambah Data !!!');
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                return redirect('/mahasiswa')->with('message_error', 'Data gagal dimasukan ke database');
            }
        }
    }

    public function delete($id_akun) {
        $mahasiswa = MInputDataModel::find($id_akun);
        if (!$mahasiswa) {
            return redirect('/mahasiswa')->with('message_error', 'Data Not Found');
        }

        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('message_error', 'Success Delete');
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
