<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            // Memperbaiki referensi ke nama tabel
            $table->foreignId('id_siswa')->constrained('siswas')->onDelete('cascade');
            $table->foreignId('id_wali')->constrained('walis')->onDelete('cascade');
            $table->foreignId('id_jurusan')->constrained('jurusans')->onDelete('cascade');
            $table->date('tanggal_daftar');
            $table->enum('status', ['Diterima', 'Ditolak', 'Pending'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
