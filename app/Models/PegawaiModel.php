<?php

namespace App\Models;

use App\Models\PegawaiOrganisasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PegawaiModel extends Model
{
    protected $table = 'pegawai_model';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pegawai',
        'nip',
        'ttl',
        'email',
        'jenis_kelamin',
        'website',
        'keahlian',
        'unit_kerja',
        'nik',
        'pangkat',
        'judul_skripsi',
        'judul_tesis',
        'judul_desertasi',
        'no_hp',
        'foto',
        'file_name',
        'file_type',
    ];

    public function pendidikan_pegawai() : HasMany {
        return $this->hasMany(PegawaiPendidikan::class, 'pegawai_model_id');
    }

    public function penghargaan_pegawai() : HasMany {
        return $this->hasMany(PegawaiPenghargaan::class, 'pegawai_model_id');
    }

    public function karya_pegawai() : HasMany {
        return $this->hasMany(PegawaiKaryaIlmiah::class, 'pegawai_model_id');
    }

    public function kegiatan_pegawai() : HasMany {
        return $this->hasMany(PegawaiKegiatan::class, 'pegawai_model_id');
    }

    public function jurnal_pegawai() : HasMany {
        return $this->hasMany(PegawaiJurnal::class, 'pegawai_model_id');
    }

    public function buku_pegawai() : HasMany {
        return $this->hasMany(PegawaiBuku::class, 'pegawai_model_id');
    }

    public function jabatan_pegawai() : HasMany {
        return $this->hasMany(PegawaiJabatan::class, 'pegawai_model_id');
    }

    public function organisasi_pegawai() : HasMany {
        return $this->hasMany(PegawaiOrganisasi::class, 'pegawai_model_id');
    }

    public function prestasi_pegawai() : HasMany {
        return $this->hasMany(PegawaiPrestasi::class, 'pegawai_model_id');
    }

    public function users() : HasOne {
        return $this->hasOne(User::class, 'pegawai_model_id');
    }
}
