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
        Schema::create('form_pendidikan_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('universitas');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('jenjang');
            $table->string('tahun_lulus');
            // $table->foreignId('id')->constrained('form_profile_dosen')->cascadeOnDelete()->default(0);
            $table->unsignedBigInteger('form_profile_dosen_id');
            $table->foreign('form_profile_dosen_id')->references('id')->on('form_profile_dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_pendidikan_dosen');
    }
};
