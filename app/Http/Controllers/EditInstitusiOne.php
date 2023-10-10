<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IkuOne;
use App\Models\IkuOne_b;
use App\Models\IkuOne_c;
use Illuminate\Http\Request;

class EditInstitusiOne extends Controller
{
    public function index($id) {
        $ikuOne = IkuOne::find($id);
        $ikuOneb = IkuOne_b::all();
        $ikuOneC = IkuOne_c::all();

        return view('intisusi.One.edit', ['title' => 'Edit Iku One'], compact('ikuOne', 'ikuOneb', 'ikuOneC'));
    }

    public function store(Request $request, $id) {
        $ikuOne = IkuOne::find($id);
        $ikuOneb = IkuOne_b::find($id);
        $ikuOneC = IkuOne_C::find($id);

        if (!$ikuOne || !$ikuOneb || !$ikuOneC) {
            return redirect()->back()->with('message_error', 'Failed To Find Iku One');
        }



        if ($ikuOne) {
            $ikuOne->update($request->all());

            $ikuOneb->create($request->all());

            return redirect()->back()->with('message', 'Success Edit Iku One');

        }

        return redirect()->back()->with('message', 'Success Edit Iku One');
    }
}
