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
        Schema::create('monev_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('prodi');
            $table->string('semester');
            $table->string('priode');
            $table->string('tahun');
            $table->string('pas_file');
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
        Schema::dropIfExists('monev_pembelajaran');
    }
};
