<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanRtl extends Model
{
    protected $table = 'laporan_rtls';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];
}
