<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormJabatanDosen extends Model
{
    protected $table = 'form_jabatan_dosen';
    protected $fillable = [
    'jabatan',
    'institusi',
    'tahun',
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class, 'id');
    }
}
