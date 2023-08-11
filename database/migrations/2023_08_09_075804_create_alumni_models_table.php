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
        Schema::create('alumni_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 225)->unique();
            $table->enum('jenis_kelamin', ['Laki-Laki','Perempuan']);
            $table->string('progam_studi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni_models');
    }
};
