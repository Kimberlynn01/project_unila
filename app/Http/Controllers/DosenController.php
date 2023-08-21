<?php

namespace App\Http\Controllers;

use App\Models\FormPendidikanDosen;
use App\Models\FormProfileDosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function DosenShow() {
        $dosen_profile = FormProfileDosen::all();
        return view('dosen.dosen', compact('dosen_profile'));
    }

    public function DosenInputProfile(Request $request) {
        $validateData = $request->validate([
            'nip_dosen' => 'required',
            'nama_dosen' => 'required',
            'ttl_dosen' => 'required',
            'id_prodi' => 'required',
            'email_dosen' => 'required',
            'website_dosen' => 'required',
            'keahlian' => 'required',
            'judul_desertasi' => 'required',
            'pas_foto' => 'mimes:jpeg,png,gif,jfif,jpg|max:2042',
        ]);

        $file = $request->file('pas_foto');

        if ($file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-dosen', $fileName, 'public');

            $validateData['file_name'] = $fileName;
            $validateData['file_type'] = $fileType;
        }

        FormProfileDosen::create($validateData);
        return response()->json(['message' => 'Data Profile Dosen Berhasil diSimpan']);
    }

    public function DosenInputPendidikan(Request $request) {
        $validateData = $request->validate([
            'universitas' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'jenjang' => 'required',
            'tahun_lulus' => 'required',
        ]);

        FormPendidikanDosen::create($validateData);

        return response()->json(['message' => 'Data Pendidikan Dosen Berhasil diSimpan']);
    }

    public function delete($id) {

        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_profile) {
            return redirect('/dosen')->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_profile->delete();

        return redirect('/dosen')->with('message', 'Data Dosen Has Ben Deleted');
    }
}
