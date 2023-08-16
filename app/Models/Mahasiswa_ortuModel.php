<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_ortuModel extends Model
{
    protected $table = 'mahasiswa_ortu_model';
    protected $primaryKey = 'mahasiswa_ortu_model_id';
    protected $fillable = [
        'nama_ayah',
        'nik_ayah',
        'tgl_lahir_ayah',
        'status_hidup_ayah',
        'status_kerabatan_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'alamat_ayah',
        'no_telp_ayah',
        'email_ayah',
        'nama_ibu',
        'nik_ibu',
        'tgl_lahir_ibu',
        'status_hidup_ibu',
        'status_kerabatan_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'alamat_ibu',
        'no_telp_ibu',
        'email_ibu',
    ];

    public function mahasiswa() {
        return $this->hasMany(MInputDataModel::class, 'id', 'mahasiswa_ortu_model_id');
    }
}
