<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MInputDataModel extends Model
{
    use HasFactory;
    protected $table = "m_input_data_models";
    protected $primaryKey= "id_akun";
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
}
