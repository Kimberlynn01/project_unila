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
        Schema::create('form_penghargaan_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penghargaan');
            $table->string('tahun');
            $table->string('institusi');
            $table->string('kategori');
            $table->unsignedBigInteger('form_penghargaan_dosen_id');
            $table->foreign('form_penghargaan_dosen_id')->references('id')->on('form_profile_dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_penghargaan_dosen');
    }
};
