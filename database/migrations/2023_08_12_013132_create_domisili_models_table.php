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
        Schema::create('domisili_model', function (Blueprint $table) {
            $table->id('domisili_model_id');
            $table->string('alamat', 225);
            $table->string('rt', 100);
            $table->string('rw', 100);
            $table->string('dusun', 100);
            $table->string('kelurahan', 100);
            $table->string('propinsi', 100);
            $table->string('kota', 100);
            $table->string('kecamatan', 100);
            $table->string('kewarganegaraan', 100);
            $table->string('kode_pos', 100);
            $table->string('status_tinggal', 100);
            $table->foreign('domisili_model_id')->references('id')->on('m_input_data_models')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domisili_model');
    }
};
