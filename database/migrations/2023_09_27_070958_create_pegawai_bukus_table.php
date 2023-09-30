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
        Schema::create('pegawai_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('tahun');
            $table->string('isbn');
            $table->string('penerbit');
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
        Schema::dropIfExists('pegawai_buku');
    }
};
