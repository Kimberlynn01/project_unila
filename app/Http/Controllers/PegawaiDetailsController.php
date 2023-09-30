<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PegawaiBuku;
use App\Models\PegawaiJabatan;
use App\Models\PegawaiJurnal;
use App\Models\PegawaiKaryaIlmiah;
use App\Models\PegawaiKegiatan;
use App\Models\PegawaiModel;
use App\Models\PegawaiOrganisasi;
use App\Models\PegawaiPendidikan;
use App\Models\PegawaiPenghargaan;
use App\Models\PegawaiPrestasi;
use Illuminate\Http\Request;

class PegawaiDetailsController extends Controller
{
    public function index($id) {
        try {
            $pegawai = PegawaiModel::find($id);

            $pendidikan = $pegawai->pendidikan_pegawai;
            $penghargaan_pegawai = $pegawai->penghargaan_pegawai;
            $karya_pegawai = $pegawai->karya_pegawai;
            $kegiatan_pegawai = $pegawai->kegiatan_pegawai;
            $jurnal_pegawai = $pegawai->jurnal_pegawai;
            $buku_pegawai = $pegawai->buku_pegawai;
            $jabatan_pegawai = $pegawai->jabatan_pegawai;
            $organisasi_pegawai = $pegawai->organisasi_pegawai;
            $prestasi_pegawai = $pegawai->prestasi_pegawai;

            $filePath =  'file-pegawai/' . $pegawai->file_name;
            $fileUrl = asset('storage/' . $filePath);

            return view('pegawai.index',[
                'title' => 'Pegawai Details'
            ], compact('pegawai', 'fileUrl', 'filePath', 'pendidikan', 'penghargaan_pegawai', 'karya_pegawai', 'kegiatan_pegawai', 'jurnal_pegawai', 'buku_pegawai','jabatan_pegawai', 'organisasi_pegawai', 'prestasi_pegawai'));
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function store(Request $request, $id) {
        $pegawai = PegawaiModel::findOrFail($id);

        if (!$pegawai) {
            abort(404);
        }

        $pegawai->update($request->all());
        return redirect()->back()->with('message', 'Success Update Data Pegawai');
    }

    public function destroy($id, $type) {
        try {

            switch ($type) {
                case 'pendidikan':
                        $pegawai = PegawaiModel::find($id);
                        $pendidikan = PegawaiPendidikan::where('id', $id)->first();

                        if (!$pendidikan) {
                            return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                        }

                        $pendidikan->delete();

                        return response()->json(['success' => 'Data berhasil dihapus']);
                break;
                case 'penghargaan':
                    $penghargaan_pegawai = PegawaiPenghargaan::where('id', $id)->first();

                    if (!$penghargaan_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }

                    $penghargaan_pegawai->delete();

                    return response()->json(['success' => 'Data berhasil dihapus']);
                break;
                case 'karya_ilmiah':
                    $karya_pegawai = PegawaiKaryaIlmiah::where('id', $id)->first();

                    if (!$karya_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }

                    $karya_pegawai->delete();

                    return response()->json(['success' => 'Data berhasil dihapus']);
                break;
                case 'kegiatan':
                    $kegiatan_pegawai = PegawaiKegiatan::where('id', $id)->first();

                    if (!$kegiatan_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }

                    $kegiatan_pegawai->delete();

                    return response()->json(['success' => 'Data berhasil dihapus']);
                break;
                case 'jurnal';
                    $jurnal_pegawai = PegawaiJurnal::where('id', $id)->first();
                    if (!$jurnal_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }
                    $jurnal_pegawai->delete();
                    return response()->json(['success' => 'Data berhasil dihapus']);
                break;
                case 'buku';
                    $buku_pegawai = PegawaiBuku::where('id', $id)->first();
                    if (!$buku_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }
                    $buku_pegawai->delete();
                    return response()->json(['success' => 'Data berhasil dihapus']);
                    break;
                case 'jabatan':
                    $jabatan_pegawai = PegawaiJabatan::where('id', $id)->first();
                    if (!$jabatan_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }
                    $jabatan_pegawai->delete();
                    return response()->json(['success' => 'Data berhasil dihapus']);
                    break;
                case 'organisasi':
                    $organisasi_pegawai = PegawaiOrganisasi::where('id', $id)->first();
                    if (!$organisasi_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }
                    $organisasi_pegawai->delete();
                    return response()->json(['success' => 'Data berhasil dihapus']);
                    break;
                case 'prestasi':
                    $prestasi_pegawai = PegawaiPrestasi::where('id', $id)->first();
                    if (!$prestasi_pegawai) {
                        return redirect()->back()->with('message_error', 'Data Gagal dihapus');
                    }

                    $prestasi_pegawai->delete();
                    return response()->json(['success' => 'Data berhasil dihapus']);
                    break;
                default:
                    # code...
                    break;
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('message_error', 'Data tidak ditemukan');
        }
    }

}
