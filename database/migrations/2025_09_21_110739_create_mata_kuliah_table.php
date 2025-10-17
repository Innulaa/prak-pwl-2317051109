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
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_mk', 100)->unique(); // 🔒 tambah unique biar gak bisa dobel
            $table->integer('sks');
            $table->softDeletes(); // 🧹 tambahkan kolom deleted_at untuk soft delete
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
