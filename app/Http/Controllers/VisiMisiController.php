<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class VisiMisiController extends Controller
{
    public function index()
    {
        return view('dashboard.visi_misi', [
            'title' => 'Visi Misi',
        ]);
    }

    public function data()
    {
        $data = VisiMisi::select('id', 'judul', 'uraian')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function form_tambah()
    {
        return view('dashboard.visi_misi.tambah');
    }
}
