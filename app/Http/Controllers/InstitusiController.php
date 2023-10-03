<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Imports\IkuOneImport;
use App\Models\IkuOne;
use App\Models\IkuOne_b;
use App\Models\IkuOne_c;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class InstitusiController extends Controller
{
    public function index() {
        $ikuOne = IkuOne::all();
        $ikuOneb = IkuOne_b::all();
        $ikuOneC = IkuOne_c::all();
        $title = 'Iku One';

        return view('intisusi.One.ikuone', compact('ikuOne', 'ikuOneb', 'ikuOneC', 'title'));
    }

    // Iku 1 Import
    public function store(Request $request)
    {
        try {
            $ikuOneFile = $request->file('file');

            if ($ikuOneFile) {
                $name = time() . '.' . $ikuOneFile->getClientOriginalExtension();
                $ikuOneFile->move(public_path('/ikuOne'), $name);

                // Ambil nilai kategori yang dipilih oleh pengguna
                $selectedKlasifikasi = $request->input('klasifikasi');

                // Impor data dari file Excel dengan menyertakan kategori
                FacadesExcel::import(new IkuOneImport($selectedKlasifikasi), public_path('/ikuOne/' . $name));

                return redirect()->back()->with('message', 'Success Import Iku One');
            }

            return redirect()->back()->with('message_error', 'Failed To Import Iku One');
        } catch (QueryException $th) {
            if ($th->getCode() == 23000) {
                return redirect()->back()->with('message_error', 'Failed To Import Iku One: Duplicate entry');
            } else {
                return redirect()->back()->with('message_error', 'Failed To Import Iku One: '.$th->getMessage());
            }
        }
    }


    public function destroy($id) {
        $ikuOne = IkuOne::find($id);

        if (!$ikuOne) {
            return redirect()->back()->with('message_error', 'Failed To Find Iku One');
        }

        $ikuOne->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
