<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiUmum extends Model
{
    protected $table = 'informasi_umum';
    protected $primaryKey= "informasi_umum_id";
    protected $fillable = [
        'jenis_kelamin',
        'email',
        'tempat_lahir',
        'status_nikah',
        'tanggal_lahir',
        'nik',
        'agama',
        'no_kk',
        'suku',
        'no_kps',
        'golongan_darah',
        'pekerjaan',
        'berat_badan',
        'penghasilan',
        'tinggi_badan',
        'instansi_pekerjaan',
        'no_telp',
        'transport',
        'no_hp',
        'akta_kelahiran',
        'email_kampus',
    ];
    public function mahasiswa() {
        return $this->hasMany(MInputDataModel::class,'id', 'informasi_umum_id');
    }

}
