<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormJurnalDosen extends Model
{
    protected $table = 'form_jurnal_dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_jurnal',
        'nama_jurnal',
        'tahun',
        'volume',
        'no_registrasi',
        'kategori',
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class, 'id');
    }
}
