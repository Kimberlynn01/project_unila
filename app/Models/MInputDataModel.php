<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InformasiUmum;

class MInputDataModel extends Model
{
    use HasFactory;
    protected $table = "m_input_data_models";
    protected $primaryKey= "id";
    protected $fillable = [
        'npm',
        'nama_lengkap',
        'prodi',
        'konsentrasi',
        'periode_masuk',
        'tahun_kurikulum',
        'sistem_kuliah',
        'status',
        'kelas',
        'jenis_pendaftaran',
        'jalur_pendaftaran',
        'gelombang',
        'tanggal_masuk',
        'nomor_tes',
        'beasiswa',
    ];


    public function mahasiswa_umum() {
        return $this->belongsTo(InformasiUmum::class, 'informasi_umum_id');
    }
    public function mahasiswa_domisili() {
        return $this->belongsTo(DomisiliModel::class, 'domisili_model_id');
    }
    public function mahasiswa_ortu() {
        return $this->belongsTo(Mahasiswa_ortuModel::class, 'mahasiswa_ortu_model_id');
    }
    public function mahasiswa_wali() {
        return $this->belongsTo(Mahasiswa_wali::class, 'mahasiswa_wali_id');
    }
    public function mahasiswa_sekolah() {
        return $this->belongsTo(Mahasiswa_SekolahModel::class, 'mahasiswa__sekolah_model_id');
    }
    public function mahasiswa_perguruan() {
        return $this->belongsTo(Mahasiswa_PerguruanTinggiModels::class, 'mahasiswa_perguruan_id');
    }
}
