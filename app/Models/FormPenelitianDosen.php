<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormPenelitianDosen extends Model
{
    use HasFactory;
    protected $table = 'form_penelitian_dosen';
    protected $primaryKery = 'id';
    protected $fillable = [
        'judul_penelitian',
        'jabatan',
        'tahun',
        'sumber_dana',
        'kategori',
        'form_profile_dosen_id',
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class);
    }
}
