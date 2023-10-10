<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IkuOne_b extends Model
{
    protected $table = 'iku_one_b';
    protected $fillable = [
        'nama',
        'npm',
        'prodi',
        'fakultas',
        'ijasah',
        'masa_tggu',
        'nama_pt',
        'provinsi',
        'gaji',
        'usaha',
        'pendapatan',
        'tempa',
        'jenjang',
        'klasifikasi',
        'kategori_id',
    ];

    // public function kategori() : BelongsTo {
    //     return $this->belongsTo(IkuOne::class);
    // }
}
