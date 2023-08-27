<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FormProfileDosen extends Model
{
    protected $table = 'form_profile_dosen';
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

    public function pendidikan_dosen()
    {
        return $this->hasMany(FormPendidikanDosen::class, 'form_profile_dosen_id');
    }

    // public function penelitian_dosen() : HasOne {
    //     return $this->hasOne(FormPenelitianDosen::class, 'id', 'id');
    // }

    // public function pengabdian_dosen() : HasOne {
    //     return $this->hasOne(FormPengabdianDosen::class, 'id', 'id');
    // }

    // public function karya_ilmiah_dosen() : HasOne {
    //     return $this->hasOne(FormKaryaIlmiahDosen::class, 'id', 'id');
    // }

    // public function kegiatan_dosen() : HasOne {
    //     return $this->hasOne(FormKegiatanDosen::class, 'id', 'id');
    // }

    // public function jurnal_dosen() : HasOne {
    //     return $this->hasOne(FormJurnalDosen::class, 'id', 'id');
    // }

    // public function buku_dosen() : HasOne {
    //     return $this->hasOne(FormBukuDosen::class, 'id', 'id');
    // }

    // public function jabatan_dosen() : HasOne {
    //     return $this->hasOne(FormJabatanDosen::class, 'id', 'id');
    // }

    // public function organisasi_dosen() : HasOne {
    //     return $this->hasOne(FormOrganisasiDosen::class, 'id', 'id');
    // }



}
