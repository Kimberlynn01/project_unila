<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalBanchmaking extends Model
{
    protected $table = 'external_banchmaking';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];
}
