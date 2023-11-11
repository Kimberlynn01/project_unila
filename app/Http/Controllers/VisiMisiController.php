<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class VisiMisiController extends Controller
{
    public function index()
    {
        return view('dashboard.visi_misi', [
            'title' => 'Visi Misi',
        ]);
    }

    public function data()
    {
        $data = VisiMisi::select('id', 'judul', 'uraian')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function form_tambah()
    {
        return view('dashboard.visi_misi.tambah', [
            'title' => 'Form Visi Misi',
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'judul' => 'required',
                'uraian' => 'required',
            ]);

            VisiMisi::create($validateData);

            return response()->json(['status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function ubah($id)
    {
        $data = VisiMisi::find($id);

        return view('dashboard.visi_misi.edit',[
            'title' => 'Form Ubah Visi Misi',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = VisiMisi::find($id);

            $validateData = $request->validate([
                'judul' => 'required',
                'uraian' => 'required',
            ]);

            $data->update($validateData);

            return response()->json(['status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {

        try {
            $data = VisiMisi::find($id);

            $data->delete();

            response()->json(['status' => true], 200);
        } catch (\Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }

    }
}
