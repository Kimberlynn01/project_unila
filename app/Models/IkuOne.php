<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IkuOne extends Model
{
    protected $table = 'iku_one';
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



    // public function b () : HasOne {
    //     return $this->hasOne(IkuOne_b::class, 'kategori_id');
    // }
    // public function c () : HasOne {
    //     return $this->hasOne(IkuOne_c::class, 'kategori_id');
    // }
}
