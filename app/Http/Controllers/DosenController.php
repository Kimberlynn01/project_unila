<?php

namespace App\Http\Controllers;

use App\Models\FormBukuDosen;
use App\Models\FormJabatanDosen;
use App\Models\FormJurnalDosen;
use App\Models\FormKaryaIlmiahDosen;
use App\Models\FormKegiatanDosen;
use App\Models\FormOrganisasiDosen;
use App\Models\FormPendidikanDosen;
use App\Models\FormPenelitianDosen;
use App\Models\FormPengabdianDosen;
use App\Models\FormPenghargaanDosen;
use App\Models\FormProfileDosen;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function DosenShow() {
        $dosen_profile = FormProfileDosen::all();

        return view('dashboard.dosen', compact('dosen_profile'));
    }



    public function DosenInputProfile(Request $request) {
        try {

            $validateData = $request->validate([
                'nip_dosen' => 'required',
                'nama_dosen' => 'required',
                'ttl_dosen' => 'required',
                'id_prodi' => 'required',
                'email_dosen' => 'required',
                'website_dosen' => 'required',
                'keahlian' => 'required',
                'judul_desertasi' => 'required',
                'pas_foto' => 'mimes:jpeg,png,gif,jfif,jpg|max:2042',
            ]);

            $file = $request->file('pas_foto');

            if ($file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $fileType = $file->getClientOriginalExtension();

                $file->storeAs('file-dosen', $fileName, 'public');

                $validateData['file_name'] = $fileName;
                $validateData['file_type'] = $fileType;
            }

            $dosen_profile = FormProfileDosen::create($validateData);
            // $dosen_profile->id;
            session(['form_profile_dosen_id' => $dosen_profile->id]);
            session(['form_penelitian_dosen_id' => $dosen_profile->id]);
            return response()->json(['message' => 'Data Profile Dosen berhasil disimpan', 'Data' => $dosen_profile]);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th]);
        }
    }


    public function DosenInputPendidikan(Request $request) {


        $validateData = $request->validate([
            'universitas' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
            'jenjang' => 'required',
            'tahun_lulus' => 'required',
            // 'form_profile_dosen_id' => '',
        ]);


        // $validateData[''];

        $formProfileDosenId = session('form_profile_dosen_id');

        // Use the $formProfileDosenId in your data
        $validateData['form_profile_dosen_id'] = $formProfileDosenId;

        FormPendidikanDosen::create($validateData);

        return response()->json(['message' => 'Data Pendidikan Dosen berhasil disimpan']);
    }


    public function DosenInputPenelitian(Request $request) {
        $validateData = $request->validate([
            'judul_penelitian' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required',
            'sumber_dana' => 'required',
            'kategori' => 'required',
        ]);
        $formProfileDosenId = session('form_penelitian_dosen_id');

        $validateData['form_penelitian_dosen_id'] = $formProfileDosenId;
        FormPenelitianDosen::create($validateData);

        return response()->json(['message' => 'Data Penelitian Dosen berhasil disimpan']);
    }

    public function DosenInputPengabdian(Request $request) {
        $validateData = $request->validate([
            'judul_pengabdian' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required',
            'sumber_dana' => 'required',
            'kategori' => 'required',
        ]);
        FormPengabdianDosen::create($validateData);

        return response()->json(['message' => 'Data Pengabdian Dosen berhasil disimpan']);
    }

    public function DosenInputPenghargaan(Request $request) {
        $validateData = $request->validate([
            'nama_penghargaan' => 'required',
            'tahun' => 'required',
            'institusi' => 'required',
            'kategori' => 'required',
        ]);

        FormPenghargaanDosen::create($validateData);

        return response()->json(['message' => 'Data Penghargaan Dosen berhasil disimpan']);
    }

    public function DosenInputKaryaIlmiah(Request $request) {
        FormKaryaIlmiahDosen::create($request->all());

        return response()->json(['message' => 'Data Karya Ilmiah Dosen berhasil disimpan']);
    }

    public function DosenInputKegiatan(Request $request) {
        FormKegiatanDosen::create($request->all());

        return response()->json(['message' => 'Data Kegiatan Dosen berhasil disimpan']);
    }

    public function DosenInputJurnal(Request $request) {
        FormJurnalDosen::create($request->all());

        return response()->json(['message' => 'Data Jurnal Dosen berhasil disimpan']);
    }
    public function DosenInputBuku(Request $request) {
        FormBukuDosen::create($request->all());

        return response()->json(['message' => 'Data Buku Dosen berhasil disimpan']);
    }

    public function DosenInputJabatan(Request $request) {
        FormJabatanDosen::create($request->all());

        return response()->json(['message' => 'Data Jabatan Dosen berhasil disimpan']);
    }

    public function DosenInputOrganisasi(Request $request) {
        FormOrganisasiDosen::create($request->all());

        return response()->json(['message' => 'Data Organisasi Dosen berhasil disimpan']);
    }

    // public function TambahInputPendidikan()


    public function DosenUpdate(Request $request, $id) {
        $dosen_profile = FormProfileDosen::findOrFail($id);
        $dosen_profile = FormProfileDosen::where('id', $id)->first();


        if (!$dosen_profile) {
            abort(404);
        }

        $dosen_profile->update($request->all());

        return redirect()->back()->with('message', 'Berhasil Mengubah Data');
    }

    public function Modal_Foto($id)
    {
        $dosen_profile = FormProfileDosen::find($id);

        return view('dosen.modal_pasFoto', compact('dosen_profile'));
    }

    public function Modal_Pendidikan($id) {
        $dosen_pendidikan = FormPendidikanDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_pendidikan) {
            // Jika data tidak ditemukan, maka buat data baru dengan ID yang diberikan
            $dosen_pendidikan = new FormPendidikanDosen(['id' => $id]);
        }

        return view('dosen.modal_pendidikan', compact('dosen_pendidikan', 'dosen_profile'));
    }




    public function InputDataPendidikanDetails(Request $request) {
        $data = $request->all();
        $dosen_id = $data['dosen_id'];

        // Cari profil dosen berdasarkan ID
        $dosen_profile = FormProfileDosen::find($dosen_id);
        if (!$dosen_profile) {
            return response()->json(['message' => 'Dosen profile not found']);
        }

        // Buat data pendidikan dosen terkait dengan profil dosen
        $dosen_pendidikan = $dosen_profile->pendidikan_dosen()->create([
            'universitas' => $data['universitas'],
            'fakultas' => $data['fakultas'],
            'prodi' => $data['prodi'],
            'jenjang' => $data['jenjang'],
            'tahun_lulus' => $data['tahun_lulus'],
        ]);

        return redirect('/dosen/details/' . $dosen_id)->with('message', 'Success Menambah Data');
    }


    public function Update_Foto(Request $request, $id) {
        $dosen_profile = FormProfileDosen::find($id);
        if ($request->hasFile('pas_foto')) {
            Storage::delete('file-dosen/' . $dosen_profile->file_name);


            $file = $request->file('pas_foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-dosen', $fileName, 'public');

            $validateData['file_name'] = $fileName;
            $validateData['file_type'] = $fileType;
            $dosen_profile->update($validateData);
        }



        return redirect()->back()->with('message', 'Berhasil mengganti Gambar Profile');
    }



    public function showDetails($id) {
        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_profile) {
            abort(404);
        }

        $dosen_pendidikan = $dosen_profile->pendidikan_dosen; // Mengambil data melalui relasi
        $dosen_penelitian = $dosen_profile->penelitian_dosen;

        $filePath =  'file-dosen/' . $dosen_profile->file_name;
        $fileUrl = asset('storage/' . $filePath);

        return view('dosen.detail', compact('dosen_profile', 'dosen_pendidikan', 'fileUrl', 'filePath', 'dosen_penelitian'));
    }



    public function delete($id) {

        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_profile) {
            return redirect('/dosen')->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_profile->delete();

        return redirect('/dosen')->with('message', 'Data Dosen Has Ben Deleted');
    }

    public function deleteDetails($id) {
        $dosen_pendidikan = FormPendidikanDosen::find($id);

        if (!$dosen_pendidikan) {
            return redirect('/dosen/details/' . $id)->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_profile = FormProfileDosen::where('id', $dosen_pendidikan->form_profile_dosen_id)->first();

        if (!$dosen_profile) {
            return redirect('/dosen/details/' . $id)->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_pendidikan->delete();
        return redirect('/dosen/details/' . $dosen_profile->id)->with('message', 'Data Berhasil di Hapus');
    }


    public function deleteDetailsPenelitian($id) {
        $dosen_penelitian = FormPenelitianDosen::find($id);

        if (!$dosen_penelitian) {
            return redirect('/dosen/details/' . $id)->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_profile = FormProfileDosen::where('id', $dosen_penelitian->form_penelitian_dosen_id)->first();

        if (!$dosen_profile) {
            return redirect('/dosen/details/' . $id)->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_penelitian->delete();
        return redirect('/dosen/details/' . $dosen_profile->id)->with('message', 'Data Berhasil di Hapus');
    }



    public function Modal_Edit_Pendidikan(Request $request, $id) {
        $dosen_pendidikan = FormPendidikanDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        return view('dosen.modal_editpendidikan', compact('dosen_pendidikan', 'dosen_profile'));
    }

    public function Modal_Edit_Penelitian(Request $request, $id) {
        $dosen_penelitian = FormPenelitianDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        return view('dosen.modal_pendidikan');
    }

    public function DosenDetailsEdits(Request $request, $id) {
        try {
            $dosen_pendidikan = FormPendidikanDosen::find($id);

            $dosen_pendidikan->update($request->all());

            return redirect()->back()->with('message', 'Berhasil mengedit Data');

        } catch (QueryException $th) {
            return response()->json(['message' => $th]);
        }
    }


}
