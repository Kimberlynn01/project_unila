<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'alumni_models';
    protected $fillable = [
        'nama',
        'nik',
        'jenis_kelamin',
        'progam_studi',
    ];
}
