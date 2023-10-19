<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonevPembelajaran extends Model
{
    protected $table = 'monev_pembelajaran';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];
}
