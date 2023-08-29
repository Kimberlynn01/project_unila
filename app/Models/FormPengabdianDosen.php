<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormPengabdianDosen extends Model
{
    use HasFactory;
    protected $table = 'form_pengabdian_dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_pengabdian',
        'jabatan',
        'tahun',
        'sumber_dana',
        'kategori',
        'form_pengabdian_dosen_id'
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class);
    }
}
