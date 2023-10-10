<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenMutuModel extends Model
{
    protected $table = 'dokumen_mutu_model';
    protected $primarykey = 'id';
    protected $fillable = [
        'judul',
        'jenis_dokumen',
        'dokumen',
        'file_name',
        'file_type',
        'user',
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
