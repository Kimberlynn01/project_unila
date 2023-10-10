<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LaporanAuditModel;
use Illuminate\Http\Request;

class DetailsLaporanAuditController extends Controller
{
    public function index($id) {
        $data = LaporanAuditModel::findOrFail($id);
        $filePath =  'file-laporan/' . $data->file_name;
        $fileUrl = asset('storage/' . $filePath);
        return view('laporan_audit.index', ['title' => 'Laporan Audit Penjamin Mutu'], compact('data', 'fileUrl', 'filePath'));
    }
}
