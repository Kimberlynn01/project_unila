<?php

namespace App\Http\Controllers;

use App\Models\LaporanRtl;
use Illuminate\Http\Request;

class RtlController extends Controller
{
    public function index() {
        $datartl = LaporanRtl::all();

        return view('rtl_rtm.laporan_rtl.index', ['title' => 'Laporan RTL'], compact('datartl'));
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'prodi' => 'required',
            'pas_file' => 'required|mimes:pdf,png,jpg,jpeg|max:2049',
        ]);
        $file = $request->file('pas_file');

        if ($file) {
            $path = $file->store('file-rtl', 'public'); // Simpan file dengan benar
            $validateData['pas_file'] = $path; // Simpan path ke file
        }
        LaporanRtl::create($validateData);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data');
    }
}
