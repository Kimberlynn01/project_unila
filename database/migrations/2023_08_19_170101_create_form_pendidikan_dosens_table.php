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
        Schema::create('form_pendidikan_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('universitas');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('jenjang');
            $table->string('tahun_lulus');
            $table->foreign('id')->references('id')->on('form_profile_dosens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pendidikan_dosens');
    }
};
