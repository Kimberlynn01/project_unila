<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LaporanAuditModel extends Model
{
    protected $table = 'laporan_audit_model';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id'
    ];

    public function tahun() : HasMany {
        return $this->hasMany(tahunlaporan::class, 'laporan_audit_model_id');
    }
}
