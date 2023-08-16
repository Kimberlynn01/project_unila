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
        Schema::create('mahasiswa__perguruan_tinggi_model', function (Blueprint $table) {
            $table->id('mahasiswa_perguruan_id');
            $table->string('perguruan_tinggi_asal');
            $table->string('prodi_asal');
            $table->string('nim_asal');
            $table->string('ipk_asal');
            $table->string('sks_asal');
            $table->string('surat_rekon_pindah');
            $table->string('transkrip_pindah');
            $table->foreign('mahasiswa_perguruan_id')->references('id')->on('m_input_data_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa__perguruan_tinggi_model');
    }
};
