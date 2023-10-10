<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahunlaporan extends Model
{
    protected $table = 'tahunlaporan';
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'tahun',
        'file_name',
        'file_type',
        'laporan_audit_model_id',
    ];


    public function laporan() {
        return $this->belongsTo(LaporanAuditModel::class, 'laporan_audit_model_id');
    }
}
