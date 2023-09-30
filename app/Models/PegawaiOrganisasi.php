<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PegawaiOrganisasi extends Model
{
    protected $table = 'pegawai_organisasi';
    protected $primaryKey = 'id';
    protected $guarded = [
        'pegawai_model_id',
    ];


    public function pegawai() : BelongsTo {
        return $this->belongsTo(PegawaiModel::class);
    }

}
