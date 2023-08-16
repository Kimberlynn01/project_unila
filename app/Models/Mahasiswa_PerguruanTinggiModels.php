<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_PerguruanTinggiModels extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa__perguruan_tinggi_model';
    protected $primaryKey = 'mahasiswa_perguruan_id';
    protected $fillable = [
    'perguruan_tinggi_asal',
    'prodi_asal',
    'nim_asal',
    'ipk_asal',
    'sks_asal',
    'surat_rekon_pindah',
    'transkrip_pindah',
    ];
    public function mahasiswa() {
        return $this->hasMany(MInputDataModel::class, 'id', 'mahasiswa_perguruan_id');
    }
}
