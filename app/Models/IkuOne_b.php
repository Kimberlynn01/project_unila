<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
