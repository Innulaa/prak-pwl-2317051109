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
        Schema::create('user', function (Blueprint $table) {
        $table->id();                               // primary key
        $table->string('nama');                     // nama mahasiswa
        $table->string('npm');                      // npm mahasiswa
        $table->foreignId('kelas_id')               // relasi ke tabel kelas
              ->constrained('kelas')
              ->onDelete('cascade');
        $table->timestamps();                       // created_at & updated_at
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
