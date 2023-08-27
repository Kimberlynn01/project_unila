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
        Schema::create('form_jabatan_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->string('institusi');
            $table->string('tahun');
            $table->foreign('id')->references('id')->on('form_profile_dosen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_jabatan_dosen');
    }
};
