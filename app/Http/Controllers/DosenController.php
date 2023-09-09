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
use App\Models\User;
use DateTime;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use Illuminate\Support\Str;

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
                'email_dosen' => 'required|email',
                'website_dosen' => 'required',
                'keahlian' => 'required',
                'judul_desertasi' => 'required',
                'pas_foto' => 'mimes:jpeg,png,gif,jfif,jpg|max:2042',
            ], [
                'email_dosen.required' => 'Masukan Email terlebih dahulu',
            ]);

            $file = $request->file('pas_foto');

            if ($file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $fileType = $file->getClientOriginalExtension();

                $file->storeAs('file-dosen', $fileName, 'public');

                $validateData['file_name'] = $fileName;
                $validateData['file_type'] = $fileType;
            }

            $user = User::create([
                'username' => $request->nama_dosen,
                'email' => $request->email_dosen,
                'password' => bcrypt('Admin'),
                'remember_token' => Str::random(60),
            ]);

            // $dosen_profile = FormProfileDosen::create($validateData, $user);
            $dosen_profile = FormProfileDosen::create($validateData);
            // $dosen_profile->users()->associate($user);
            $user->profile_dosen()->associate($dosen_profile); // Menghubungkan profil Dosen dengan User
            $user->save();

            // $dosen_profile->id;
                session(['form_profile_dosen_id' => $dosen_profile->id]);
                // session(['form_penelitian_dosen_id' => $dosen_profile->id]);
                // session(['form_pengabdian_dosen_id' => $dosen_profile->id]);
                // session(['form_penghargaan_dosen_id' => $dosen_profile->id]);
                // session(['form_karya_ilmiah_dosen_id' => $dosen_profile->id]);
                // session(['form_kegiatan_dosen_id' => $dosen_profile->id]);
                // session(['form_jurnal_dosen_id' => $dosen_profile->id]);
                // session(['form_buku_dosen_id' => $dosen_profile->id]);
                // session(['form_jabatan_dosen_id' => $dosen_profile->id]);
                // session(['form_organisasi_dosen_id' => $dosen_profile->id]);
                // session(['user_id' => $dosen_profile->id]);



            return response()->json(['message' => 'Data Profile Dosen berhasil disimpan', 'Data' => $dosen_profile]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $th->getMessage()]);
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



        $formProfileDosenId = session('form_profile_dosen_id');

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
        $formProfileDosenId = session('form_profile_dosen_id');

        $validateData['form_profile_dosen_id'] = $formProfileDosenId;
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

        $formProfileDosenId = session('form_profile_dosen_id');

        $validateData['form_profile_dosen_id'] = $formProfileDosenId;

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

        $formProfileDosenId = session('form_profile_dosen_id');

        $validateData['form_profile_dosen_id'] = $formProfileDosenId;

        FormPenghargaanDosen::create($validateData);

        return response()->json(['message' => 'Data Penghargaan Dosen berhasil disimpan']);
    }

    public function DosenInputKaryaIlmiah(Request $request) {
        $formProfileDosenId = session('form_profile_dosen_id');

        $validateData['form_profile_dosen_id'] = $formProfileDosenId;

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

        // $user = $dosen_profile->users;
        // $user = User::find($id);




        if (!$dosen_profile) {
            abort(404);
        }

        $dosen_profile->update($request->all());
        // $user->update(['username' => $dosen_profile->nama_dosen]);
        return redirect()->back()->with('message', 'Berhasil Mengubah Data');
    }

    public function Modal_Foto($id)
    {
        $dosen_profile = FormProfileDosen::find($id);

        return view('dosen.modal.modal_pasFoto', compact('dosen_profile'));
    }

    public function Modal_Pendidikan($id) {
        $dosen_pendidikan = FormPendidikanDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_pendidikan) {
            // Jika data tidak ditemukan, maka buat data baru dengan ID yang diberikan
            $dosen_pendidikan = new FormPendidikanDosen(['id' => $id]);
        }

        return view('dosen.modal.modal_pendidikan', compact('dosen_pendidikan', 'dosen_profile'));
    }

    function Modal_Kegiatan($id) {
        $dosen_kegiatan = FormKegiatanDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_kegiatan) {
            $dosen_kegiatan = new FormKegiatanDosen(['id' => $id]);
        }

        return view('dosen.modal.modal_kegiatan', compact('dosen_kegiatan', 'dosen_profile'));
    }




    public function InputDataPendidikanDetails(Request $request) {
        $data = $request->all();
        $dosen_id = $data['dosen_id'];


        $dosen_profile = FormProfileDosen::find($dosen_id);
        if (!$dosen_profile) {
            return response()->json(['message' => 'Dosen profile not found']);
        }

        $dosen_pendidikan = $dosen_profile->pendidikan_dosen()->create([
            'universitas' => $data['universitas'],
            'fakultas' => $data['fakultas'],
            'prodi' => $data['prodi'],
            'jenjang' => $data['jenjang'],
            'tahun_lulus' => $data['tahun_lulus'],
        ]);

        return redirect('/dosen/details/' . $dosen_id)->with('message', 'Success Menambah Data');
    }

    public function InputDataPenelitianDetails(Request $request) {
        $data = $request->all();
        $dosen_id = $data['dosen_id'];


        $dosen_profile = FormProfileDosen::find($dosen_id);
        if (!$dosen_profile) {
            return response()->json(['message' => 'Dosen profile not found']);
        }

        $dosen_penelitian = $dosen_profile->penelitian_dosen()->create([
            'judul_penelitian' => $data['judul_penelitian'],
            'jabatan' => $data['jabatan'],
            'tahun' => $data['tahun'],
            'sumber_dana' => $data['sumber_dana'],
            'kategori' => $data['kategori'],
        ]);

        return redirect('/dosen/details/' . $dosen_id)->with('message', 'Success Menambah Data');
    }

    public function InputDataPengabdianDetails(Request $request) {
        $data = $request->all();
        $dosen_id = $data['dosen_id'];

        $dosen_profile = FormProfileDosen::find($dosen_id);
        if (!$dosen_profile) {
            return response()->json(['message' => 'Dosen profile not found']);
        }
        $dosen_pengabdian = $dosen_profile->pengabdian_dosen()->create($request->all());

        return redirect()->back()->with('message', 'Success Menambah Data Pengabdian');
    }

    public function InputDataPenghargaanDetails(Request $request) {
        $data = $request->all();
        $dosen_id = $data['dosen_id'];

        $dosen_profile = FormProfileDosen::find($dosen_id);
        if (!$dosen_profile) {
            return redirect()->back()->with('message_error', 'Dosen profile not found');
        }
        $dosen_penghargaan = $dosen_profile->penghargaan_dosen()->create($request->all());

        return redirect()->back()->with('message', 'Success Menambah Data Penghargaan');
    }

    function InputDataKaryaIlmiahDetails(Request $request) {
        $data = $request->all();
        $dosen_id = $data['dosen_id'];

        $dosen_profile = FormProfileDosen::find($dosen_id);
        if (!$dosen_profile) {
            return redirect()->back()->with('message_error', 'Data failed');
        }
        $dosen_karyaIlmiah = $dosen_profile->karya_ilmiah_dosen()->create($request->all());

        return redirect()->back()->with('message', 'Data Input Success');
    }

    function InputDataKegiatanDetails(Request $request){
        $data = $request->all();
        $dosen_id = $data['dosen_id'];

        $dosen_profile = FormProfileDosen::find($dosen_id);

        if(!$dosen_profile) {
            return redirect()->back()->with('message_error', 'Data Gagal diTambahkan');
        }

        $dosen_kegiatan = $dosen_profile->kegiatan_dosen()->create($request->all());

        return redirect()->back()->with('message', 'Success Menambah Data Kegiatan');
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

        $dosen_pendidikan = $dosen_profile->pendidikan_dosen;
        $dosen_penelitian = $dosen_profile->penelitian_dosen;
        $dosen_pengabdian = $dosen_profile->pengabdian_dosen;
        $dosen_penghargaan = $dosen_profile->penghargaan_dosen;
        $dosen_karyaIlmiah = $dosen_profile->karya_ilmiah_dosen;
        $dosen_kegiatan = $dosen_profile->kegiatan_dosen;
        $dosen_jurnal = $dosen_profile->jurnal_dosen;
        $dosen_buku = $dosen_profile->buku_dosen;
        $dosen_jabatan = $dosen_profile->jabatan_dosen;
        $dosen_organisasi = $dosen_profile->organisasi_dosen;


        $filePath =  'file-dosen/' . $dosen_profile->file_name;
        $fileUrl = asset('storage/' . $filePath);


        return view('dosen.detail', compact('dosen_profile', 'dosen_pendidikan', 'fileUrl', 'filePath', 'dosen_penelitian','dosen_penghargaan','dosen_pengabdian', 'dosen_karyaIlmiah', 'dosen_kegiatan', 'dosen_jurnal', 'dosen_buku', 'dosen_jabatan', 'dosen_organisasi'));
    }



    public function delete($id) {

        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_profile) {
            return redirect('/dosen')->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_profile->delete();

        return redirect('/dosen')->with('message_error', 'Data Dosen Has Ben Deleted');
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
        return redirect('/dosen/details/' . $dosen_profile->id)->with('message_error', 'Data Berhasil di Hapus');
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
        return redirect('/dosen/details/' . $dosen_profile->id)->with('message_error', 'Data Berhasil di Hapus');
    }

    public function deleteDetailsPengabdian($id) {
        $dosen_pengabdian = FormPengabdianDosen::find($id);

        if (!$dosen_pengabdian) {
            return redirect()->back()->with('message_error', 'Data Dosen not found');
        }

        $dosen_profile = FormProfileDosen::where('id', $dosen_pengabdian->form_pengabdian_dosen_id)->first();

        if (!$dosen_profile) {
            return redirect()->back()->with('message_error', 'Failed Delete Datas');
        }
        $dosen_pengabdian->delete();
        return redirect()->back()->with('message_error', 'Success Delete Datas');
    }

    function deleteDetailsPenghargaan($id) {
        $dosen_penghargaan = FormPenghargaanDosen::find($id);

        if (!$dosen_penghargaan) {
            return redirect()->back()->with('message_error', 'Failled');
        }
        $dosen_penghargaan->delete();

        return redirect()->back()->with('message_error', 'Success Delete Penghargaan');
    }

    function deleteDetailsKaryaIlmiah($id) {
        $dosen_karyaIlmiah = FormKaryaIlmiahDosen::find($id);

        if (!$dosen_karyaIlmiah) {
            return redirect()->back()->with('message_error');
        }

        $dosen_karyaIlmiah->delete();

        return redirect()->back()->with('message_error', 'Success Delete Data Karya Ilmiah');
    }

    function deleteDetailsKegiatan($id) {
        $dosen_kegiatan = FormKegiatanDosen::find($id);

        if (!$dosen_kegiatan) {
            return redirect()->back()->with('message_error', 'Data Tidak Ditemukan');
        }

        $dosen_kegiatan->delete();

        return redirect()->back()->with('message_error', 'Berhasil Menghapus Data');
    }

    public function Modal_Edit(Request $request, $id, $jenis) {
        $dosen_profile = FormProfileDosen::find($id);
        $data = null;
        $view = '';

        switch ($jenis) {
            case 'pendidikan':
                $data = FormPendidikanDosen::find($id);
                $view = 'dosen.modal_edit.modal_editpendidikan';
                break;
            case 'penelitian':
                $data = FormPenelitianDosen::find($id);
                $view = 'dosen.modal_edit.modal_editpenelitian';
                break;
            case 'pengabdian':
                $data = FormPengabdianDosen::find($id);
                $view = 'dosen.modal_edit.modal_editpengabdian';
                break;
            case 'penghargaan':
                $data = FormPenghargaanDosen::find($id);
                $view = 'dosen.modal_edit.modal_editpenghargaan';
                break;
            case 'karyaIlmiah':
                $data = FormKaryaIlmiahDosen::find($id);
                $view = 'dosen.modal_edit.modal_editkaryaIlmiah';
                break;
            case 'kegiatan':
                $data = FormKegiatanDosen::find($id);
                $view = 'dosen.modal_edit.modal_editKegiatan';
                break;
            default:
                break;
        }

        return view($view, compact('data', 'dosen_profile'));
    }


    function Modal_Penghargaan(Request $request, $id) {
        $dosen_penghargaan = FormPenghargaanDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        return view('dosen.modal.modal_penghargaan', compact('dosen_penghargaan', 'dosen_profile'));
    }

    function Modal_KaryaIlmiah($id) {
        $dosen_karyaIlmiah = FormKaryaIlmiahDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);


        return view('dosen.modal.modal_karyailmiah', compact('dosen_karyaIlmiah', 'dosen_profile'));
    }

    public function Modal_Penelitian(Request $request, $id) {
        $dosen_penelitian = FormPenelitianDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_penelitian) {
            // Jika data tidak ditemukan, maka buat data baru dengan ID yang diberikan
            $dosen_pendidikan = new FormPendidikanDosen(['id' => $id]);
        }

        return view('dosen.modal.modal_penelitian', compact('dosen_penelitian', 'dosen_profile'));
    }

    public function Modal_Pengabdian(Request $request, $id) {
        $dosen_pengabdian = FormPengabdianDosen::find($id);
        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_pengabdian) {
            $dosen_pengabdian = new FormPengabdianDosen(['id' => $id]);
        }

        return view('dosen.modal.modal_pengabdian', compact('dosen_pengabdian', 'dosen_profile'));
    }


    public function DosenDetailsEdits(Request $request, $id) {
        try {
            $jenis = $request->input('jenis');
            if ($jenis === 'dosen_pendidikan') {
                $data = FormPendidikanDosen::find($id);
                $title = 'Pendidikan Dosen';
            }
            elseif ($jenis === 'dosen_penelitian') {
                $data = FormPenelitianDosen::find($id);
                $title = 'Penelitian Dosen';
            }
            elseif ($jenis === 'dosen_pengabdian') {
                $data = FormPengabdianDosen::find($id);
                $title = 'Pengabdian Dosen';
            }
            elseif ($jenis === 'dosen_penghargaan') {
                $data = FormPenghargaanDosen::find($id);
                $title = 'Penghargaan Dosen';
            }
            elseif ($jenis === 'dosen_karya') {
                $data = FormKaryaIlmiahDosen::find($id);;
                $title = 'Karya Ilmiah Dosen';
            }
            elseif ($jenis === 'dosen_kegiatan') {
                $data = FormKegiatanDosen::find($id);
                $title = 'Kegiatan Dosen';
            }
            elseif ($jenis === 'dosen_jurnal') {
                $data = FormJurnalDosen::find($id);
                $title = 'Jurnal Dosen';
            }
            elseif ($jenis === 'dosen_buku') {
                $data = FormBukuDosen::find($id);
                $title = 'Buku Dosen';
            }
            elseif ($jenis === 'dosen_jabatan') {
                $data = FormJabatanDosen::find($id);
                $title = 'Jabatan Dosen';
            }
            elseif ($jenis === 'dosen_organisasi') {
                $data = FormOrganisasiDosen::find($id);
                $title = 'Organisasi Dosen';
            }

            if ($data) {
                $data->update($request->all());

                return redirect()->back()->with('message', 'Success Edit  '  .  $title);
            } else {
                return redirect()->back()->with('message_error', 'Data tidak ditemukan');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function EditKaryaIlmiah(Request $request, $id) {
        $dosen_karyaIlmiah = FormKaryaIlmiahDosen::find($id);
        $dosen_karyaIlmiah->update($request->all());

        return redirect()->back()->with('message', 'Success Update');
    }

    function FormEditPassword($id) {
        $user = Auth::user();
        $user = User::find($id);
        $dosen_profile = FormProfileDosen::find($user->id);
        return view('dosen.edit_password', compact('user', 'dosen_profile'));
    }

    function EditPassword($id) {
        $user = User::find($id);
        $user->username = request('username');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect()->back()->with('success', 'Settings Berhasil Disimpan');
    }

    function resetPassword($id) {
        $user = User::find($id);

        $user->password = Hash::make('Admin');
        $user->save();

        return redirect()->back()->with('success', 'Password Berhasil Direset');
    }

}
