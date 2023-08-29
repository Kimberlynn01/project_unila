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
        Schema::create('form_jurnal_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('judul_jurnal');
            $table->string('nama_jurnal');
            $table->string('tahun');
            $table->string('volume');
            $table->string('no_registrasi');
            $table->string('kategori');
            $table->unsignedBigInteger('form_jurnal_dosen_id');
            $table->foreign('form_jurnal_dosen_id')->references('id')->on('form_profile_dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_jurnal_dosen');
    }
};
