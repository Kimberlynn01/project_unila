<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormKaryaIlmiahDosen extends Model
{
    use HasFactory;
    protected $table = 'form_karya_ilmiah_dosen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_karya_ilmiah',
        'tahun',
        'jenis',
        'kategori',

    ];

    public function profile_dosen() : BelongsToMany {
        return $this->belongsToMany(FormProfileDosen::class, 'id');
    }
}
