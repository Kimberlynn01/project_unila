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
use App\Models\FormPrestasiDosen;
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

        return view('dashboard.dosen', compact('dosen_profile'), ['title' => 'Dosen']);
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

            $dosen_profile = FormProfileDosen::create($validateData);
            $user->profile_dosen()->associate($dosen_profile); // Menghubungkan profil Dosen dengan User
            $user->save();

                session(['form_profile_dosen_id' => $dosen_profile->id]);

            return response()->json(['message' => 'Data Profile Dosen berhasil disimpan', 'Data' => $dosen_profile]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Terjadi kesalahan: ' . $th->getMessage()]);
        }
    }

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


    public function Modal_Popout($id, $jenis) {
        $dosen_profile = FormProfileDosen::find($id);
        $data = null;
        $view = '';

        switch ($jenis) {
            case 'pasfoto':
                $data = FormProfileDosen::find($id);
                $view = 'dosen.modal.modal_pasFoto';
                break;
            case 'pendidikan':
                $data = FormPendidikanDosen::find($id);
                $view = 'dosen.modal.modal_pendidikan';
                break;
            case 'penelitian':
                $data = FormPenelitianDosen::find($id);
                $view = 'dosen.modal.modal_penelitian';
                break;
            case 'pengabdian':
                $data = FormPengabdianDosen::find($id);
                $view = 'dosen.modal.modal_pengabdian';
                break;
            case 'penghargaan':
                $data = FormPenghargaanDosen::find($id);
                $view = 'dosen.modal.modal_penghargaan';
                break;
            case 'karya':
                $data = FormKaryaIlmiahDosen::find($id);
                $view = 'dosen.modal.modal_karyailmiah';
                break;
            case 'kegiatan':
                $data = FormKegiatanDosen::find($id);
                $view = 'dosen.modal.modal_kegiatan';
                break;
            case 'jurnal':
                $data = FormJurnalDosen::find($id);
                $view = 'dosen.modal.modal_jurnal';
                break;
            case 'buku':
                $data = FormBukuDosen::find($id);
                $view = 'dosen.modal.modal_buku';
                break;
            case 'jabatan':
                $data = FormJabatanDosen::find($id);
                $view = 'dosen.modal.modal_jabatan';
                break;
            case 'organisasi':
                $data = FormOrganisasiDosen::find($id);
                $view = 'dosen.modal.modal_organisasi';
                break;
            case 'prestasi':
                $data = FormPrestasiDosen::find($id);
                $view = 'dosen.modal.modal_prestasi';
                break;
            default:
                break;
        }

        return view($view, compact('dosen_profile', 'data'));
    }

    public function Modal_Send(Request $request, $id){
        try {
            $jenis = $request->input('jenis');

            if ($jenis === 'pendidikan') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];


                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return response()->json(['message' => 'Dosen profile not found']);
                }

                $dosen_profile->pendidikan_dosen()->create($request->all());

                return redirect('/dosen/details/' . $dosen_id)->with('message', 'Success Menambah Data');
            } elseif ($jenis === 'penelitian') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];


                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return response()->json(['message' => 'Dosen profile not found']);
                }

                $dosen_profile->penelitian_dosen()->create($request->all());

                return redirect('/dosen/details/' . $dosen_id)->with('message', 'Success Menambah Data');
            } elseif ($jenis === 'pengabdian') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return response()->json(['message' => 'Dosen profile not found']);
                }
                $dosen_pengabdian = $dosen_profile->pengabdian_dosen()->create($request->all());

                return redirect()->back()->with('message', 'Success Menambah Data Pengabdian');
            } elseif ($jenis === 'penghargaan') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Dosen profile not found');
                }
                $dosen_penghargaan = $dosen_profile->penghargaan_dosen()->create($request->all());

                return redirect()->back()->with('message', 'Success Menambah Data Penghargaan');
            } elseif ($jenis === 'kegiatan') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];
                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Dosen profile not found');
                }

                $dosen_karyaIlmiah = $dosen_profile->kegiatan_dosen()->create($request->all());
                return redirect()->back()->with('message', 'Success Menambah Data Kegiatan');
            } elseif ($jenis === 'jurnal') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);

                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Gagal Menambahkan Data');
                }

                $dosen_jurnal = $dosen_profile->jurnal_dosen()->create($request->all());


                return redirect()->back()->with('message', 'Success Menambahkan Data ' . $jenis);
            } elseif ($jenis === 'buku') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Gagal Menambahkan Data');
                }

                $dosen_buku = $dosen_profile->buku_dosen()->create($request->all());
                return redirect()->back()->with('message', 'Success Menambahkan Data ' . $jenis);
            } elseif($jenis === 'jabatan') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);
                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Gagal Menambahkan Data');
                }

                $dosen_jabatan = $dosen_profile->jabatan_dosen()->create($request->all());
                return redirect()->back()->with('message', 'Success Menambahkan Data ' . $jenis);
            } elseif($jenis === 'organisasi') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);

                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Gagal Menambahkan Data');
                }

                $dosen_organisasi = $dosen_profile->organisasi_dosen()->create($request->all());
                return redirect()->back()->with('message', 'Success Menambahkan Data ' . $jenis);
            } elseif($jenis === 'prestasi') {
                $data = $request->all();
                $dosen_id = $data['dosen_id'];

                $dosen_profile = FormProfileDosen::find($dosen_id);

                if (!$dosen_profile) {
                    return redirect()->back()->with('message_error', 'Gagal Menambahkan Data');
                }

                $dosen_prestasi = $dosen_profile->prestasi_dosen()->create($request->all());

                return redirect()->back()->with('message', 'Success Menambahkan Data ' . $jenis);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('message_error', $th->getMessage());
        }
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

    public function Update_Foto(Request $request, $id) {
        $dosen_profile = FormProfileDosen::find($id);
        if ($request->hasFile('pas_foto')) {
            Storage::delete('file-dosen/' . $dosen_profile->file_name);


            $file = $request->file('pas_foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $fileType = $file->getClientOriginalExtension();

            $file->storeAs('file-dosen', $fileName, 'public');

            $validateDsata['file_name'] = $fileName;
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
        $dosen_prestasi = $dosen_profile->prestasi_dosen;


        $filePath =  'file-dosen/' . $dosen_profile->file_name;
        $fileUrl = asset('storage/' . $filePath);


        return view('dosen.detail', compact('dosen_profile', 'dosen_pendidikan', 'fileUrl', 'filePath', 'dosen_penelitian','dosen_penghargaan','dosen_pengabdian', 'dosen_karyaIlmiah', 'dosen_kegiatan', 'dosen_jurnal', 'dosen_buku', 'dosen_jabatan', 'dosen_organisasi', 'dosen_prestasi'), ['title' => 'Details']);
    }


    public function destroy($id, $type) {
        if ($type == 'pendidikan') {
            $dosen_pendidikan = FormPendidikanDosen::find($id);
            if (!$dosen_pendidikan) {
                return redirect()->back()->with('message_error', 'Data Dosen Not Found');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_pendidikan->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Not Found');
            }

            $dosen_pendidikan->delete();
            return redirect()->back()->with('message_error', 'Data Berhasil di Hapus');
        } elseif ($type == 'penelitian') {

            $dosen_penelitian = FormPenelitianDosen::find($id);
            if (!$dosen_penelitian) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_penelitian->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }
            $dosen_penelitian->delete();

            return redirect()->back()->with('message_error', 'Data Berhasil dihapus');

        } elseif ($type == 'pengabdian') {
            $dosen_pengabdian = FormPengabdianDosen::find($id);
            if (!$dosen_pengabdian) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_pengabdian->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }
            $dosen_pengabdian->delete();

            return redirect()->back()->with('message_error', 'Data Berhasil dihapus');
        } elseif ($type == 'penghargaan') {
            $dosen_penghargaan = FormPenghargaanDosen::find($id);
            if (!$dosen_penghargaan) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_penghargaan->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }
            $dosen_penghargaan->delete();

            return redirect()->back()->with('message_error', 'Data Berhasil dihapus');
        } elseif($type == 'karyailmiah') {
            $dosen_karyaIlmiah = FormKaryaIlmiahDosen::find($id);
            if (!$dosen_karyaIlmiah) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_karyaIlmiah->form_profile_dosen_id)->first();


            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_karyaIlmiah->delete();

            return redirect()->back()->with('message_error', 'Data Berhasil dihapus');
        } elseif ($type == 'kegiatan') {
            $dosen_kegiatan = FormKegiatanDosen::find($id);
            if (!$dosen_kegiatan) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_kegiatan->form_profile_dosen_id)->first();


            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_kegiatan->delete();

            return redirect()->back()->with('message_error', 'Data Berhasil dihapus');
        }
        elseif ($type == 'jurnal') {
            $dosen_jurnal = FormJurnalDosen::find($id);
            if (!$dosen_jurnal) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_jurnal->form_profile_dosen_id)->first();


            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_jurnal->delete();

            return redirect()->back()->with('message_error', 'Data Berhasil dihapus');
        } elseif ($type == 'buku') {
            $dosen_buku = FormBukuDosen::find($id);

            if (!$dosen_buku) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_buku->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_buku->delete();

            return redirect()->back()->with('message_error', 'Berhasil Menghapus data');
        } elseif($type == 'jabatan') {
            $dosen_jabatan = FormJabatanDosen::find($id);

            if (!$dosen_jabatan) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_jabatan->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_jabatan->delete();

            return redirect()->back()->with('message_error', 'Berhasil Menghapus data');
        } elseif($type == 'organisasi') {
            $dosen_organisasi = FormOrganisasiDosen::find($id);

            if (!$dosen_organisasi) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_organisasi->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_organisasi->delete();

            return redirect()->back()->with('message_error', 'Berhasil Menghapus data');
        } elseif($type == 'prestasi') {
            $dosen_prestasi = FormPrestasiDosen::find($id);

            if (!$dosen_prestasi) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak ditemukan');
            }

            $dosen_profile = FormProfileDosen::where('id', $dosen_prestasi->form_profile_dosen_id)->first();

            if (!$dosen_profile) {
                return redirect()->back()->with('message_error', 'Data Dosen Tidak Ditemukan');
            }

            $dosen_prestasi->delete();

            return redirect()->back()->with('message_error', 'Berhasil Menghapus data');
        }
    }


    public function delete($id) {

        $dosen_profile = FormProfileDosen::find($id);

        if (!$dosen_profile) {
            return redirect('/dosen')->with('message_error', 'Data Dosen Not Found');
        }

        $dosen_profile->delete();

        return redirect('/dosen')->with('message_error', 'Data Dosen Has Ben Deleted');
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
            case 'jurnal':
                $data = FormJurnalDosen::find($id);
                $view = 'dosen.modal_edit.modal_jurnal';
                break;
            case 'buku':
                $data = FormBukuDosen::find($id);
                $view = 'dosen.modal_edit.modal_buku';
                break;
            case 'jabatan':
                $data = FormJabatanDosen::find($id);
                $view = 'dosen.modal_edit.modal_jabatan';
                break;
            case 'organisasi':
                $data = FormOrganisasiDosen::find($id);
                $view = 'dosen.modal_edit.modal_organisasi';
                break;
            case 'prestasi':
                $data = FormPrestasiDosen::find($id);
                $view = 'dosen.modal_edit.modal_prestasi';
                break;
            default:
                break;
        }

        return view($view, compact('data', 'dosen_profile'));
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
                $data = FormKaryaIlmiahDosen::find($id);
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
            } elseif ($jenis === 'dosen_prestasi') {
                $data = FormPrestasiDosen::find($id);
                $title = 'Prestasi Dosen';
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
        return view('layout.settings', compact('user', 'dosen_profile'));
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
