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
        Schema::create('form_profile_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nip_dosen')->unique();
            $table->string('nama_dosen');
            $table->string('ttl_dosen');
            $table->string('id_prodi');
            $table->string('email_dosen');
            $table->string('website_dosen');
            $table->string('keahlian');
            $table->string('judul_desertasi');
            $table->string('pas_foto');
            $table->string('file_name');
            $table->string('file_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_profile_dosen');
    }
};
