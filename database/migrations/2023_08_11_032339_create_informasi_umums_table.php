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
        Schema::create('informasi_umum', function (Blueprint $table) {
            $table->id('informasi_umum_id');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->string('status_nikah');
            $table->date('tanggal_lahir');
            $table->string('nik')->unique();
            $table->string('agama');
            $table->string('no_kk');
            $table->string('suku');
            $table->string('no_kps');
            $table->string('golongan_darah');
            $table->string('pekerjaan');
            $table->string('berat_badan');
            $table->string('penghasilan');
            $table->string('tinggi_badan');
            $table->string('instansi_pekerjaan');
            $table->string('no_telp');
            $table->string('transport');
            $table->string('no_hp');
            $table->string('akta_kelahiran');
            $table->string('email_kampus');
            $table->foreign('informasi_umum_id')->references('id')->on('m_input_data_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_umum');
    }
};
