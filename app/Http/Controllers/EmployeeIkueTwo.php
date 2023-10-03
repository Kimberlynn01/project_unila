<?php

namespace App\Http\Controllers;

use App\Models\IkuTwo;
use Illuminate\Http\Request;

class EmployeeIkueTwo extends Controller
{
    public function index() {
        // $institusi = IkuTwo::all();

        return view('intisusi.ikutwo');
    }
}
