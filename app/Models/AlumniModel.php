<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniModel extends Model
{
    protected $table = "alumni_models";
    protected $primarykey = "id";
    protected $fillable = ["nama", "nik", "jenis_kelamin", "progam_studi"];
}
