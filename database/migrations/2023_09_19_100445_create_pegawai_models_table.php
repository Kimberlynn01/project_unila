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
        Schema::create('pegawai_model', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('nip')->nullable()->unique();
            $table->string('ttl')->nullable();
            $table->string('email')->nullable();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('website')->nullable();
            $table->string('keahlian')->nullable();
            $table->string('foto')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('nik')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('judul_skripsi')->nullable();
            $table->string('judul_tesis')->nullable();
            $table->string('judul_desertasi')->nullable();
            $table->string('no_hp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai_model');
    }
};
