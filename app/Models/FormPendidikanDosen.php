<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormPendidikanDosen extends Model
{
    use HasFactory;
    protected $table = 'form_pendidikan_dosens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'universitas',
        'fakultas',
        'prodi',
        'jenjang',
        'tahun_lulus',
    ];

    public function profile_dosen() : BelongsTo {
        return $this->belongsTo(FormProfileDosen::class, 'id');
    }
}
