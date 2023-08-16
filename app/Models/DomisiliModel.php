<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomisiliModel extends Model
{
    use HasFactory;
    protected $table = 'domisili_model';
    protected $primaryKey = "domisili_model_id";
    protected $fillable = [
        'alamat',
        'rt',
        'rw',
        'dusun',
        'kelurahan',
        'propinsi',
        'kota',
        'kecamatan',
        'kewarganegaraan',
        'kode_pos',
        'status_tinggal'
    ];
    public function mahasiswa() {
        return $this->hasMany(MInputDataModel::class,'id', 'domisili_model_id');
    }
}
