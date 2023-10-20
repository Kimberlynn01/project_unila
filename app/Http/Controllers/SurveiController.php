<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SurveiController;
use App\Models\SurveiKepuasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SurveiController extends Controller
{
    public function index ()
    {
        $datasurvei = SurveiKepuasan::all();

        return view('survei_kepuasan/index', ['title' => 'Survei Kepuasan'], compact('datasurvei'));
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'judul' => 'required',
            'pas_file' => 'mimes:pdf,png,jpg,jpeg|max:2049',
        ]);

        $file = $request->file('pas_file');

        if ($file) {
            $path = $file->store('file-survei', 'public'); // Simpan file dengan benar
            $validateData['pas_file'] = $path; // Simpan path ke file
        }

        SurveiKepuasan::create($validateData);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'judul' => 'required',
            'pas_file' => 'mimes:pdf,png,jpg,jpeg|max:2049',
        ]);

        $surveiKepuasan = SurveiKepuasan::find($id);

        if (!$surveiKepuasan) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Jika ada file yang diunggah, simpan file baru
        if ($request->hasFile('pas_file')) {
            $file = $request->file('pas_file');
            $path = $file->store('file-survei', 'public');
            $validateData['pas_file'] = $path;

            // Hapus file lama (jika ada)
            if ($surveiKepuasan->pas_file) {
                Storage::delete('file-survei/' . $surveiKepuasan->pas_file);
            }
        }

        $surveiKepuasan->update($validateData);

        return redirect()->back()->with('success', 'Data berhasil diupdate.');
    }

    public function modal($id)
    {
        $datasurvei = SurveiKepuasan::find($id);
        return view('survei_kepuasan.modal.modaledit', compact('datasurvei'));
    }

    public function delete($id) {
        $datasurvei = SurveiKepuasan::find($id);

        if (!$datasurvei) {
            return redirect()->back()->with('message_error', 'Data Dosen Not Found');
        }
        $datasurvei->delete();

        return redirect()->back()->with('message_error', 'Data Dosen Has Ben Deleted');
    }


}
