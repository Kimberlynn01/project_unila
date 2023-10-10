<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DokumenMutuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumenMutuEditController extends Controller
{

    public function index($id) {
        $data = DokumenMutuModel::findOrFail($id);

        $filePath =  'file-dokumen/' . $data->file_name;
        $fileUrl = asset('storage/' . $filePath);
        return view('dokumen.modal_edit.modal', compact('data','fileUrl', 'filePath'));
    }
    public function store(Request $request,$id) {
        $data = DokumenMutuModel::find($id);

        if (!$data) {
            return redirect()->back()->with('message_error', 'Data Tidak Ditemukan');
        }

        if ($request->hasFile('dokumen')) {
            Storage::delete('file-dokumen/' . $data->file_name);

            $file = $request->file('dokumen');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-dokumen', $fileName, 'public');

            $validateData['file_name'] = $fileName;
            $validateData['file_type'] = $fileType;
            $data->update($validateData);
        }

        $data->update($request->all());


        return redirect()->back()->with('message', 'Success Update');
    }
}
