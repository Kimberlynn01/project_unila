<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FormProfileDosen extends Model
{
    use HasFactory;
    protected $table = 'form_profile_dosens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nip_dosen',
        'nama_dosen',
        'ttl_dosen',
        'id_prodi',
        'email_dosen',
        'website_dosen',
        'keahlian',
        'judul_desertasi',
        'pas_foto',
        'file_name',
        'file_type',
    ];

    public function pendidikan_dosen() : HasOne {
        return $this->hasOne(FormPendidikanDosen::class, 'id', 'id');
    }

}
