<?php

namespace App\Models;

use App\Models\SurveiKepuasan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SurveiKepuasan extends Model
{
    protected $table = 'survei_kepuasans';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];
}
