<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormPrestasiDosen extends Model
{
    protected $table = 'form_prestasi_dosen';
    protected $primaryKey = 'id';
    protected $dates = ['tahun'];
    protected $fillable = [
        'prestasi',
        'keterangan',
        'tahun',
        'form_profile_dosen_id',
    ];

    public function profile_dosen() : BelongsTo {
        return $this->belongsTo(FormProfileDosen::class);
    }

    public function getTahunAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}
