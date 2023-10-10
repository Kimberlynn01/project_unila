<?php

namespace App\Http\Controllers;

use App\Models\DokumenMutuModel;
use App\Models\User;
use Database\Seeders\DokumenSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokumenMutuController extends Controller
{
    public function index() {
        $dokumen_mutu = DokumenMutuModel::all();

        return view('dashboard.dokumen', ['title' => 'Dokumen'], compact('dokumen_mutu'));
    }

    public function store(Request $request) {
            $validateData = $request->validate([
                'judul' => 'required',
                'jenis_dokumen' => 'required',
                'dokumen' => 'required|mimes:docx,doc,pdf,xlsx,xls,gif,jpg,png|max:2048',
            ]);

            // Use the $user variable instead of fetching it again
            $validateData['user'] = Auth::user()->username;

            $file = $request->file('dokumen');

            if ($file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $fileType = $file->getClientOriginalExtension();

                $file->storeAs('file-dokumen', $fileName, 'public');

                $validateData['file_name'] = $fileName;
                $validateData['file_type'] = $fileType;
            }

            DokumenMutuModel::create($validateData);

            return redirect()->back()->with('message', 'Dokumen Berhasil Ditambahkan');
    }
    public function destroy($id) {
        $dokumen = DokumenMutuModel::find($id);

        if (!$dokumen) {
            return redirect()->back()->with('message_error', 'Dokumen Tidak Ditemukan');
        }

        $dokumen->delete();


        return redirect()->back()->with('message_error', 'Berhasil menghapus data dokumen');
    }
}
