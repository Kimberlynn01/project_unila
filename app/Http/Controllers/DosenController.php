<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function DosenShow(Request $request) {
        return view('dashboard.dosen');
    }
}
