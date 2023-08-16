<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_SekolahModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa__sekolah_model';
    protected $primaryKey = 'mahasiswa__sekolah_model_id';
    protected $fillable = [
    'pendidikan_asal',
    'propinsi_sekolah',
    'kota_sekolah',
    'sekolah',
    'nisn',
    'alamat_sekolah',
    'telp_sekolah',
    'nomor_ijasah_sekolah',
    'image',
    'file_name',
    'file_type',
    ];
    public function mahasiswa() {
        return $this->belongsTo(MInputDataModel::class, 'id', 'mahasiswa__sekolah_model_id');
    }
}
