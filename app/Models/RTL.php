<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RTL extends Model
{
    protected $table = 'rtl';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];

}
