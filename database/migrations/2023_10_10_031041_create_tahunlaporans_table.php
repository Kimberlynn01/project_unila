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
        Schema::create('tahunlaporan', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->string('file_name');
            $table->string('file_type');
            $table->unsignedBigInteger('laporan_audit_model_id');
            $table->foreign('laporan_audit_model_id')->references('id')->on('laporan_audit_model')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahunlaporan');
    }
};
