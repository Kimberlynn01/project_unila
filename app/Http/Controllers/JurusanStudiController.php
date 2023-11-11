<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanStudiController extends Controller
{
    public function index()
    {
        return view('dashboard.jurusan-program', [
            'title' => 'Jurusan Program Studi',
        ]);
    }
}
