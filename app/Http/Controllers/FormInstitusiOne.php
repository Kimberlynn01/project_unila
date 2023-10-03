<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IkuOne;
use App\Models\IkuOne_b;
use App\Models\IkuOne_c;
use Illuminate\Http\Request;

class FormInstitusiOne extends Controller
{
    public function index() {
        $ikuOne = IkuOne::all();
        $ikuOneb = IkuOne_b::all();
        $ikuOneC = IkuOne_c::all();

        return view('intisusi.One.form',['title' => 'Form Iku One'],compact('ikuOne', 'ikuOneb', 'ikuOneC'));
    }

    public function store(Request $request) {
        $ikuOne = IkuOne::create($request->all());

        if(!$ikuOne) {
            return redirect()->back()->with('message_error', 'Failed To Import Iku One');
        }

        return redirect()->back()->with('message', 'Success Import Iku One');
    }

}
