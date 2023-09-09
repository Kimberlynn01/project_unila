<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FormBukuDosen extends Model
{
    protected $table = 'form_buku_dosen';
    protected $fillable = [
        'judul_buku',
        'tahun',
        'isbn',
        'penerbit',
        'kategori',
        'form_profile_dosen_id'
    ];

    public function profile_dosen() : BelongsToMany {
        return $this->BelongsToMany(FormProfileDosen::class, 'id');
    }
}
