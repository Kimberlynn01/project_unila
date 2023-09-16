<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormPendidikanDosen extends Model
{
    protected $table = 'form_pendidikan_dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'universitas',
        'fakultas',
        'prodi',
        'jenjang',
        'tahun_lulus',
        'form_profile_dosen_id',
    ];

    public function profile_dosen() : BelongsTo
    {
        return $this->belongsTo(FormProfileDosen::class, 'id');
    }
}
