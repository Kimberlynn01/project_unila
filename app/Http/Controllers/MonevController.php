<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonevPembelajaran;

class MonevController extends Controller
{
    public function index ()
    {
        $datamonev = MonevPembelajaran::all();

        return view('dashboard.monev_pembelajaran', ['title' => 'Laporan Audit Penjamin Mutu'], compact('datamonev'));
    }

    public function store(Request $request) {

                $validateData = $request->validate([
                    'prodi' => 'required',
                    'semester' => 'required',
                    'priode' => 'required',
                    'tahun' => 'required',
                    'pas_file' => 'mimes:pdf,png,jpg,jpeg|max:2049',
                ]);

                $file = $request->file('pas_file');

            if ($file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $fileType = $file->getClientOriginalExtension();
                $file->storeAs('file-monev', $fileName, 'public');
                $validateData['file_name'] = $fileName;
                $validateData['file_type'] = $fileType;
            }

            MonevPembelajaran::create($validateData);


            return redirect()->back()->with('success', 'Berhasil Menambahkan Data');

    }

    public function update (Request $request, $id) {
        $datamonev = MonevPembelajaran::find($id);

        if (!$datamonev) {
            return redirect()-back()->with('error', 'gagal');
        }

        $datamonev->update($request->all());

        return redirect()->back()->with('message', 'Berhasil Mengubah Data');
    }

    public function modal($id) {

        $datamonev = MonevPembelajaran::find($id);

        return view('monev_pembelajaran.modal.modaledit', compact('datamonev'));
    }

    public function delete($id) {
        $datamonev = MonevPembelajaran::find($id);

        if (!$datamonev) {
            return redirect()->back()->with('message_error', 'Data Dosen Not Found');
        }
        $datamonev->delete();

        return redirect('/monev')->with('message_error', 'Data Dosen Has Ben Deleted');
    }
}
