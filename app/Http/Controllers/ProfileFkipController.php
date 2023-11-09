<?php

namespace App\Http\Controllers;

use App\Models\ProfileFKIP;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProfileFkipController extends Controller
{
    public function index() {
        return view('dashboard.profilefkip',[
            'title' => 'Profile FKIP'
        ]);
    }

    public function data()
    {
        $data = ProfileFKIP::select('id', 'judul', 'uraian')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function tambah()
    {
        return view('dashboard.profile_fkip.form-tambah',[
            'title' => ' Profile FKIP'
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'judul' => 'required',
                'uraian' => 'required|string'
            ]);

            ProfileFKIP::create($validateData);

            return response()->json(['status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function detail($id)
    {
        $data = ProfileFKIP::find($id);
        return view('dashboard.profile_fkip.detail', [
            'title' => 'Profile FKIP',
            'data' => $data,
        ]);
    }

    public function destroy(Request $request)
    {
        try {
            $id = $request->id;

            $data = ProfileFKIP::find($id);

            $data->delete();

            return response()->json(['status' => true], 200);
        } catch (\Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

    public function ubah($id) {
        $data = ProfileFKIP::find($id);
        return view('dashboard.profile_fkip.edit', [
            'title' => 'Profile FKIP',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = ProfileFKIP::find($id);

            if (!$data) {
                return response()->json(['status' => false, 'message' => 'Record not found.'], 404);
            }

            $data->update($request->all());

            return response()->json(['status' => true], 200);
        } catch (\Exception $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage()], 500);
        }
    }

}
