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
        Schema::create('pegawai_jurnal', function (Blueprint $table) {
            $table->id();
            $table->string('judul_jurnal');
            $table->string('nama_jurnal');
            $table->string('tahun');
            $table->string('volume');
            $table->string('no_registrasi');
            $table->string('kategori');
            $table->unsignedBigInteger('pegawai_model_id');
            $table->foreign('pegawai_model_id')->references('id')->on('pegawai_model')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai_jurnal');
    }
};
