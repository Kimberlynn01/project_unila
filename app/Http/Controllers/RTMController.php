<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RTM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class RTMController extends Controller
{
    public function index()
    {
        return view('dashboard.rtm', [
            'title' => 'RTM',
        ]);
    }

    public function data()
    {
        $data = RTM::select('id' ,'program_studi', 'file')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function store(Request $request)
    {
        try {
            $valiDate = $request->validate([
                'program_studi' => 'required|unique:rtm,program_studi',
                'file' => 'required|mimes:png,jpg,pdf,docx|max:2048',
            ]);

            $file = $request->file('file');

            if ($file) {
                $filePath = time() . $file->getClientOriginalName();
                $file->storeAs('rtm', $filePath);
                $valiDate['file'] = $filePath;
            }

            if (!$valiDate) {
                return response()->json(['status' => false, 'message' => 'Validation failed'], 400);
            }

            RTM::create($valiDate);

            return response()->json(['status' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $id = $request->id_lama;

            $data = RTM::find($id);

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
                $oldFilePath = "rtm/{$data->file}";
                Storage::delete($oldFilePath);

                $newFilePath = time() . $file->getClientOriginalName();
                $file->storeAs('rtm', $newFilePath);
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

        $data = RTM::find($id);

        if (!$data) {
            return response()->json(['status' => false, 'message' => 'Data not found'], 404);
        }

        Storage::delete("rtm/{$data->file}");
        $data->delete();

        return response()->json(['status' => true], 200);
    }
}
