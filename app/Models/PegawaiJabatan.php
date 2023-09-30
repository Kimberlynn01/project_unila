<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PegawaiJabatan extends Model
{
    protected $table = 'pegawai_jabatan';
    protected $primaryKey = 'id';
    protected $guarded = [
        'pegawai_model_id',
    ];

    public function pegawai() : BelongsTo {
        return $this->belongsTo(PegawaiModel::class);
    }


}
