<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class PegawaiPendidikan extends Model
{
    protected $table = 'pegawai_pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'universitas',
        'fakultas',
        'tahun',
        'progam_studi',
        'jenjang_pendidikan',
        'pegawai_model_id',
    ];

    public function pegawai() : BelongsTo {
        return $this->belongsTo(PegawaiModel::class, 'id');
    }
}
