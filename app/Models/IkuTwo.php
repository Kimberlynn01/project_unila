<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IkuTwo extends Model
{
    protected $table = 'iku_two';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id',
    ];
}
