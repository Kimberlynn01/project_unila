<?php

namespace App\Http\Controllers;

use App\Models\ExternalBanchmaking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ExternalBackmarkingController extends Controller
{
    public function index()
    {
        return view('dashboard.external', [
            'title' => 'External Backmarking',
        ]);
    }

    public function data()
    {
        $data = ExternalBanchmaking::select('id', 'tahun', 'file')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function store(Request $request)
    {
        try {
            $valiDate = $request->validate([
                'tahun' => 'required|unique:external_banchmaking,tahun',
                'file' => 'required|mimes:png,jpg,pdf,docx|max:2048',
            ]);

            $file = $request->file('file');

            if ($file) {
                $filePath = time() . $file->getClientOriginalName();
                $file->storeAs('external', $filePath);
                $valiDate['file'] = $filePath;
            }

            if (!$valiDate) {
                return response()->json(['status' => false, 'message' => 'Validation failed'], 400);
            }

            ExternalBanchmaking::create($valiDate);

            return response()->json(['status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $id = $request->id_lama;

            $data = ExternalBanchmaking::find($id);

            if (!$data) {
                return response()->json(['status' => false, 'message' => 'Data not found'], 404);
            }

            $validateData = $request->validate([
                'tahun' => 'required',
                'file' => 'required|mimes:png,jpg,pdf,docx|max:2048',
            ],
            [
                'tahun.required' => 'Tahun is required',
                'file.required' => 'File is required',
            ]);

            $file = $request->file('file');

            if ($file) {
                $oldFilePath = "external/{$data->file}";
                Storage::delete($oldFilePath);

                $newFilePath = time() . $file->getClientOriginalName();
                $file->storeAs('external', $newFilePath);
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

        $data = ExternalBanchmaking::find($id);

        if (!$data) {
            return response()->json(['status' => false, 'message' => 'Data not found'], 404);
        }

        Storage::delete("external/{$data->file}");
        $data->delete();

        return response()->json(['status' => true], 200);
    }
}
