<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PegawaiPenghargaan extends Model
{
    protected $table = 'pegawai_penghargaan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'penghargaan',
        'institusi',
        'tahun',
        'kategori',
        'pegawai_model_id',
    ];

    public function pegawai() : BelongsTo {
        return $this->belongsTo(PegawaiModel::class);
    }

}
