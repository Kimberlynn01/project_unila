<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileFKIP extends Model
{
    protected $table = 'profile_fkip';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id',
    ];
}
