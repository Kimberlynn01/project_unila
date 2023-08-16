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
        Schema::create('mahasiswa_ortu_model', function (Blueprint $table) {
            $table->id('mahasiswa_ortu_model_id');
            $table->string('nama_ayah');
            $table->bigInteger('nik_ayah');
            $table->date('tgl_lahir_ayah');
            $table->string('status_hidup_ayah');
            $table->string('status_kerabatan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('alamat_ayah');
            $table->string('no_telp_ayah');
            $table->string('email_ayah');
            $table->string('nama_ibu');
            $table->bigInteger('nik_ibu');
            $table->date('tgl_lahir_ibu');
            $table->string('status_hidup_ibu');
            $table->string('status_kerabatan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('alamat_ibu');
            $table->string('no_telp_ibu');
            $table->string('email_ibu');
            $table->foreign('mahasiswa_ortu_model_id')->references('id')->on('m_input_data_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_ortu_model');
    }
};
