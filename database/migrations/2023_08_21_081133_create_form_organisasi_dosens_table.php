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
        Schema::create('form_organisasi_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('organisasi');
            $table->string('institusi');
            $table->string('tahun');
            $table->unsignedBigInteger('form_organisasi_dosen');
            $table->foreign('form_organisasi_dosen')->references('id')->on('form_profile_dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_organisasi_dosen');
    }
};
