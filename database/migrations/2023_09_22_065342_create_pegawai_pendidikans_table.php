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
        Schema::create('pegawai_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('universitas');
            $table->string('fakultas');
            $table->string('progam_studi');
            $table->string('jenjang_pendidikan');
            $table->string('tahun');
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
        Schema::dropIfExists('pegawai_pendidikan');
    }
};
