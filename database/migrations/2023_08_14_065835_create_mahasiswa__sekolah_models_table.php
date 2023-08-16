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
        Schema::create('mahasiswa__sekolah_model', function (Blueprint $table) {
            $table->id('mahasiswa__sekolah_model_id');
            $table->string('pendidikan_asal');
            $table->string('propinsi_sekolah');
            $table->string('kota_sekolah');
            $table->string('sekolah');
            $table->string('nisn');
            $table->string('alamat_sekolah');
            $table->string('telp_sekolah');
            $table->string('nomor_ijasah_sekolah');
            $table->string('image')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->foreign('mahasiswa__sekolah_model_id')->references('id')->on('m_input_data_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa__sekolah_model');
    }
};
