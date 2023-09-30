<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PegawaiKegiatan extends Model
{
    protected $table = 'pegawai_kegiatan';
    protected $primaryKey = 'id';
    protected $guarded = [
        'pegawai_model_id',
    ];


    public function pegawai() : BelongsTo {
        return $this->belongsTo(PegawaiModel::class);
    }


}
