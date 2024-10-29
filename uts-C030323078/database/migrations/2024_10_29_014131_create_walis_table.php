<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wali', 100);
            $table->string('hubungan', 50);
            $table->string('no_hp', 15)->nullable();
            $table->text('alamat');
            $table->string('pekerjaan', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};
