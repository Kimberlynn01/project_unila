<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PegawaiModel;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index() {
        $pegawai = PegawaiModel::all();
        return view('dashboard.pegawai',[
            'title' => 'Pegawai'
        ], compact('pegawai'));
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'nama_pegawai' => 'required',
            'nip' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'website' => 'required',
            'keahlian' => 'required',
            'foto' => 'mimes:jpeg,png,gif,jfif,jpg|max:14929',
        ]);

        $file = $request->file('foto');

        if ($file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-pegawai', $fileName, 'public');

            $validate['file_name'] = $fileName;
            $validate['file_type'] = $fileType;
        }

        $user = User::create([
            'username' => $request->nama_pegawai,
            'email' => $request->email,
            'password' => bcrypt('Pegawai'),
        ]);

        $pegawai = PegawaiModel::create($validate);
        $user->pegawai()->associate($pegawai);
        $user->save();


        return redirect()->back()->with('message', 'Success Menambah Data Pegawai');
    }
}