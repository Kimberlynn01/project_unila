<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormPenghargaanDosen extends Model
{
    use HasFactory;
    protected $table = 'form_penghargaan_dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_penghargaan',
        'tahun',
        'institusi',
        'kategori',
        'form_profile_dosen_id'
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class, 'id');
    }
}
