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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PegawaiPrestasi;

class PegawaiModalController extends Controller
{

    public function index($id, $type) {
        $pegawai = PegawaiModel::find($id);
        $data = null;
        $view = '';

        switch ($type) {
            case 'pendidikan_edit':
                $data = PegawaiPendidikan::find($id);
                $view = 'pegawai.modal_edit.pendidikan';
                break;
            case 'penghargaan_edit':
                $data = PegawaiPenghargaan::find($id);
                $view = 'pegawai.modal_edit.penghargaan';
                break;
            case 'karya_ilmiah_edit':
                $data = PegawaiKaryaIlmiah::find($id);
                $view = 'pegawai.modal_edit.karya_ilmiah';
                break;
            case 'kegiatan_edit':
                $data = PegawaiKegiatan::find($id);
                $view = 'pegawai.modal_edit.kegiatan';
                break;
            case 'jurnal_edit':
                $data = PegawaiJurnal::find($id);
                $view = 'pegawai.modal_edit.jurnal';
                break;
            case 'buku_edit':
                $data = PegawaiBuku::find($id);
                $view = 'pegawai.modal_edit.buku';
                break;
            case 'jabatan_edit':
                $data = PegawaiJabatan::find($id);
                $view = 'pegawai.modal_edit.jabatan';
                break;
            case 'organisasi_edit':
                $data = PegawaiOrganisasi::find($id);
                $view = 'pegawai.modal_edit.organisasi';
                break;
            case 'prestasi_edit':
                $data = PegawaiPrestasi::find($id);
                $view = 'pegawai.modal_edit.prestasi';
            default:
                break;
        }
        return view($view, compact('pegawai', 'data'));
    }


    public function store(Request $request,$id, $type) {

        if ($type == 'foto') {
            if ($request->hasFile('foto')) {
                $pegawai = PegawaiModel::find($id);

                Storage::delete('file-pegawai/' . $pegawai->file_name);


                $file = $request->file('foto');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $fileType = $file->getClientOriginalExtension();

                $file->storeAs('file-pegawai', $fileName);

                $validate['file_name'] = $fileName;
                $validate['file_type'] = $fileType;
                $pegawai->update($validate);
            }
            return redirect()->back()->with('message', 'Berhasil Mengubah Foto');
        } elseif ($type === 'pendidikan') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];
            $pegawai = PegawaiModel::find($pegawai_id);
            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'Data Gagal disimpan');
            }
            $pegawai->pendidikan_pegawai()->create($request->all());
            return redirect()->back()->with('message', 'Berhasil Menambah Data Pendidikan');
        } elseif ($type === 'pendidikan_edit') {
            $pendidikan_pegawai = PegawaiPendidikan::find($id);
            if (!$pendidikan_pegawai) {
                return redirect()->back()->with('message', 'Gagal Mengupdate data');
            }
            $pendidikan_pegawai->update($request->all());
            return redirect()->back()->with('message', 'Berhasil Mengupdate data');
        } elseif ($type === 'penghargaan') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];
            $pegawai = PegawaiModel::find($pegawai_id);
            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'Data Gagal disimpan');
            }
            $pegawai->penghargaan_pegawai()->create($request->all());
            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Penghargaan');
        } elseif ($type === 'penghargaan_edit') {
            $penghargaan_pegawai = PegawaiPenghargaan::find($id);
            if (!$penghargaan_pegawai) {
                return redirect()->back()->with('message', 'Gagal Mengupdate data');
            }
            $penghargaan_pegawai->update($request->all());
            return redirect()->back()->with('message', 'Berhasil Mengupdate data');
        } elseif ($type === 'karya_ilmiah') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];
            $pegawai = PegawaiModel::find($pegawai_id);
            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'Data Gagal disimpan');
            }
            $pegawai->karya_pegawai()->create($request->all());
            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Karya Ilmiah');
        } elseif ($type === 'karya_ilmiah_edit') {
            $karya_pegawai = PegawaiKaryaIlmiah::find($id);
            if (!$karya_pegawai) {
                return redirect()->back()->with('message', 'Gagal Mengupdate data');
            }
            $karya_pegawai->update($request->all());
            return redirect()->back()->with('message', 'Berhasil Mengupdate data');
        } elseif ($type === 'kegiatan') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];
            $pegawai = PegawaiModel::find($pegawai_id);
            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'Data Gagal disimpan');
            }
            $pegawai->kegiatan_pegawai()->create($request->all());
            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Kegiatan');
        } elseif ($type === 'kegiatan_edit') {
            $kegiatan_pegawai = PegawaiKegiatan::find($id);

            if (!$kegiatan_pegawai) {
                return redirect()->back()->with('message', 'Gagal Mengupdate data');
            }

            $kegiatan_pegawai->update($request->all());
            return redirect()->back()->with('message', 'Berhasil Mengupdate data');
        } elseif ($type === 'jurnal') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];

            $pegawai = PegawaiModel::find($pegawai_id);

            if (!$pegawai) {
                return redirect()->back()->with('message_error');
            }
            $pegawai->jurnal_pegawai()->create($request->all());
            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Jurnal');

        } elseif ($type === 'jurnal_edit') {
            $jurnal_pegawai = PegawaiJurnal::find($id);

            if (!$jurnal_pegawai) {
                return redirect()->back()->with('message', 'Gagal Mengupdate data');
            }

            $jurnal_pegawai->update($request->all());
            return redirect()->back()->with('message', 'Berhasil Mengupdate data');
        } elseif ($type === 'buku') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];

            $pegawai = PegawaiModel::find($pegawai_id);

            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'Data Gagal disimpan');
            }

            $pegawai->buku_pegawai()->create($request->all());

            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Buku');
        } elseif ($type === 'buku_edit') {
            $buku_pegawai = PegawaiBuku::find($id);

            if (!$buku_pegawai) {
                return redirect()->back()->with('message', 'Gagal Mengupdate data');
            }

            $buku_pegawai->update($request->all());

            return redirect()->back()->with('message', 'Berhasil Mengupdate data');
        } elseif($type === 'jabatan') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];

            $pegawai = PegawaiModel::find($pegawai_id);

            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'data gagal ditemukan');
            }

            $pegawai->jabatan_pegawai()->create($request->all());

            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Jabatan');
        } elseif ($type === 'jabatan_edit') {
            $jabatan_pegawai = PegawaiJabatan::find($id);

            if (!$jabatan_pegawai) {
                return redirect()->back()->with('message', 'Gagal mengupdate data');
            }

            $jabatan_pegawai->update($request->all());

            return redirect()->back()->with('message', 'Data berhasil diupdate');
        } elseif ($type === 'organisasi') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];

            $pegawai = PegawaiModel::find($pegawai_id);

            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'data gagal ditemukan');
            }

            $pegawai->organisasi_pegawai()->create($request->all());

            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Organisasi');
        } elseif ($type === 'organisasi_edit') {
            $organisasi_pegawai = PegawaiOrganisasi::find($id);

            if (!$organisasi_pegawai) {
                return redirect()->back()->with('message', 'Gagal mengupdate data');
            }

            $organisasi_pegawai->update($request->all());

            return redirect()->back()->with('message', 'Data berhasil diupdate');
        } elseif ($type === 'prestasi') {
            $data = $request->all();
            $pegawai_id = $data['pegawai_id'];

            $pegawai = PegawaiModel::find($pegawai_id);

            if (!$pegawai) {
                return redirect()->back()->with('message_error', 'data gagal ditemukan');
            }

            $pegawai->prestasi_pegawai()->create($request->all());

            return redirect()->back()->with('message', 'Berhasil Menambahkan Data Prestasi');
        } elseif ($type === 'prestasi_edit') {
            $prestasi_pegawai = PegawaiPrestasi::find($id);

            if (!$prestasi_pegawai) {
                return redirect()->back()->with('message', 'Gagal mengupdate data');
            }

            $prestasi_pegawai->update($request->all());
            return redirect()->back()->with('message', 'Data berhasil diupdate');
        }
    }

}
