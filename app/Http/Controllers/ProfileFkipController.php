<?php

namespace App\Http\Controllers;

use App\Models\ProfileFKIP;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProfileFkipController extends Controller
{
    public function index() {
        return view('dashboard.profilefkip',[
            'title' => 'Profile FKIP'
        ]);
    }

    public function data()
    {
        $data = ProfileFKIP::select('id', 'judul', 'uraian')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}
