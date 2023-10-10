<?php

namespace App\Http\Controllers;

use App\Models\LaporanAuditModel;
use Illuminate\Http\Request;

class LaporanAuditController extends Controller
{
    public function index ()
    {
        $data = LaporanAuditModel::all();
        return view('dashboard.laporan_audit', ['title' => 'Laporan Audit Penjamin Mutu'], compact('data'));
    }

    public function store (Request $request) {
        $validateData = $request->validate([
            'program_studi' => 'required',
            'tahun' => 'required',
            'dokumen' => 'mimes:docx,doc,pdf,xlsx,xls,gif,jpg,png|max:2048',
        ]);


        $file = $request->file('dokumen');

        if ($file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-laporan', $fileName, 'public');

            $validateData['file_name'] = $fileName;
            $validateData['file_type'] = $fileType;
        }

        LaporanAuditModel::create($validateData);


        if (!$validateData) {
            return redirect()->back()->with('message_error', 'Gagal Menyimpan Data');
        }

        return redirect()->back()->with('message', 'Berhasil Menyimpan Data');
    }

    public function destroy($id) {
        $data = LaporanAuditModel::find($id);

        if (!$data) {
            return redirect()->back()->with('message_error', 'Gagal Menghapus');
        }

        $data->delete();

        return redirect()->back()->with('message_error', 'Berhasil Menghapus');
    }
}
