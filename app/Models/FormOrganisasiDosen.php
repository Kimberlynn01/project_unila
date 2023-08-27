<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormOrganisasiDosen extends Model
{
    protected $table = 'form_organisasi_dosen';
    protected $fillable = [
    'organisasi',
    'institusi',
    'tahun',
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->belongsToMany(FormProfileDosen::class, 'id');
    }
}
