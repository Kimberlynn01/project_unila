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
        Schema::create('mahasiswa_wali', function (Blueprint $table) {
            $table->id('mahasiswa_wali_id');
            $table->string('nama_wali');
            $table->string('nik_wali');
            $table->string('tgl_lahir_wali');
            $table->string('status_hidup_wali');
            $table->string('status_kerabatan_wali');
            $table->string('pendidikan_wali');
            $table->string('pekerjaan_wali');
            $table->string('penghasilan_wali');
            $table->string('alamat_wali');
            $table->string('no_telp_wali');
            $table->string('email_wali');
            $table->foreign('mahasiswa_wali_id')->references('id')->on('m_input_data_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_wali');
    }
};
