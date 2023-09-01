<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home',);
        };
        return redirect('/');
    }


    public function logout () {
        Auth::logout();
        return redirect('/');
    }
}
