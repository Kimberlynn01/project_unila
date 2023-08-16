<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_wali extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_wali';
    protected $primaryKey = 'mahasiswa_wali_id';
    protected $fillable = [
    'nama_wali',
    'nik_wali',
    'tgl_lahir_wali',
    'status_hidup_wali',
    'status_kerabatan_wali',
    'pendidikan_wali',
    'pekerjaan_wali',
    'penghasilan_wali',
    'alamat_wali',
    'no_telp_wali',
    'email_wali',
    ];

    public function mahasiswa() {
        return $this->hasMany(MInputDataModel::class, 'id', 'mahasiswa_wali_id');
    }
}
