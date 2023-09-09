<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormKegiatanDosen extends Model
{
    protected $table = 'form_kegiatan_dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kegiatan',
        'tahun',
        'peranan',
        'kategori',
        'form_profile_dosen_id'
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class, 'id');
    }
}
