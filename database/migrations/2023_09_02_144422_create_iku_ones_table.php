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
        Schema::create('iku_one', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->string('prodi');
            $table->string('fakultas');
            $table->string('ijasah');
            $table->string('masa_tggu');
            $table->string('nama_pt');
            $table->string('provinsi');
            $table->string('gaji');
            $table->string('usaha');
            $table->string('pendapatan');
            $table->string('tempa');
            $table->string('jenjang');
            $table->string('klasifikasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iku_one');
    }
};
