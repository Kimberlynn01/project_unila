<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_input_data_models', function (Blueprint $table) {
            $table->id('id_akun', 11);
            $table->string('npm', 50)->unique();
            $table->string('nama_lengkap', 100);
            $table->string('prodi', 100);
            $table->string('konsentrasi', 100);
            $table->string('periode_masuk', 20);
            $table->string('tahun_kurikulum', 10);
            $table->string('sistem_kuliah', 100);
            $table->string('status', 100);
            $table->string('kelas', 100);
            $table->string('jenis_pendaftaran', 100);
            $table->string('jalur_pendaftaran', 100);
            $table->string('gelombang', 100);
            $table->string('tanggal_masuk', 100);
            $table->string('nomor_tes', 100);
            $table->string('beasiswa', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_input_data_models');
    }
};
