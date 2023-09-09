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

    public function pendidikan_dosen() : HasMany
    {
        return $this->hasMany(FormPendidikanDosen::class, 'form_profile_dosen_id');
    }

    public function penelitian_dosen() : HasMany {
        return $this->hasMany(FormPenelitianDosen::class, 'form_profile_dosen_id');
    }

    public function pengabdian_dosen() : HasMany {
        return $this->hasMany(FormPengabdianDosen::class, 'form_profile_dosen_id');
    }

    public function penghargaan_dosen() : HasMany {
        return $this->hasMany(FormPenghargaanDosen::class, 'form_profile_dosen_id');
    }

    public function karya_ilmiah_dosen() : HasMany {
        return $this->hasMany(FormKaryaIlmiahDosen::class, 'form_profile_dosen_id');
    }

    public function kegiatan_dosen() : HasMany {
        return $this->hasMany(FormKegiatanDosen::class, 'form_profile_dosen_id');
    }

    public function jurnal_dosen() : HasMany {
        return $this->hasMany(FormJurnalDosen::class, 'form_profile_dosen_id');
    }

    public function buku_dosen() : HasMany {
        return $this->hasMany(FormBukuDosen::class, 'form_profile_dosen_id');
    }

    public function jabatan_dosen() : HasMany {
        return $this->hasMany(FormJabatanDosen::class, 'form_profile_dosen_id');
    }

    public function organisasi_dosen() : HasMany {
        return $this->hasMany(FormOrganisasiDosen::class, 'form_profile_dosen_id');
    }

    public function users() : HasOne
    {
        return $this->hasOne(User::class, 'form_profile_dosen_id');
    }

}
