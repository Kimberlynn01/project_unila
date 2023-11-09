<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RTM extends Model
{
    protected $table = 'rtm';
    protected $primary = 'id';
    protected $guarded = [
        'id',
    ];
}
