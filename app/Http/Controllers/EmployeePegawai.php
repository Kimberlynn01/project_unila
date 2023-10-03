<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployeePegawai extends Controller
{
    public function reset($id) {
        $user = User::find($id);

        $user->password = Hash::make('Pegawai');
        $user->save();

        return redirect()->back()->with('message', 'Berhasil Mengubah Reset Password');
    }
}
