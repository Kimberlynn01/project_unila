<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RTL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class RTLController extends Controller
{
    public function index()
    {
        return view('dashboard.rtl', [
            'title' => 'RTL',
        ]);
    }

    public function data()
    {
        $data = RTL::select('id' ,'program_studi', 'file')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function store(Request $request)
    {
        try {
            $valiDate = $request->validate([
                'program_studi' => 'required|unique:rtl,program_studi',
                'file' => 'required|mimes:png,jpg,pdf,docx|max:2048',
            ]);

            $file = $request->file('file');

            if ($file) {
                $filePath = time() . $file->getClientOriginalName();
                $file->storeAs('rtl', $filePath);
                $valiDate['file'] = $filePath;
            }

            if (!$valiDate) {
                return response()->json(['status' => false, 'message' => 'Validation failed'], 400);
            }

            RTL::create($valiDate);

            return response()->json(['status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
            try {
                $id = $request->id_lama;

                $data = RTL::find($id);

                if (!$data) {
                    return response()->json(['status' => false, 'message' => 'Data not found'], 404);
                }

                $validateData = $request->validate([
                    'program_studi' => 'required',
                    'file' => 'required|mimes:png,jpg,pdf,docx|max:2048',
                ],
                [
                    'program_studi.required' => 'Program Studi is required',
                    'file.required' => 'File is required',
                ]);

                $file = $request->file('file');

                if ($file) {
                    $oldFilePath = "rtl/{$data->file}";
                    Storage::delete($oldFilePath);

                    $newFilePath = time() . $file->getClientOriginalName();
                    $file->storeAs('rtl', $newFilePath);
                    $validateData['file'] = $newFilePath;
                }

                $data->update($validateData);

                return response()->json(['status' => true], 200);
            } catch (\Exception $e) {
                return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
            }
    }

    public function destroy(Request $request)
    {
        $id = $request->id;

        $data = RTL::find($id);

        if (!$data) {
            return response()->json(['status' => false, 'message' => 'Data not found'], 404);
        }

        Storage::delete("rtl/{$data->file}");
        $data->delete();

        return response()->json(['status' => true], 200);
    }
}
