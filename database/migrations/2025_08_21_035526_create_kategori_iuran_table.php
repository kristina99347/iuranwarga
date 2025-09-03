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
        Schema::create('kategori_iuran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');   // contoh: Iuran Bulanan, Iuran Tahunan
            $table->decimal('nominal', 12, 2)->default(0); // jumlah uang
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_iuran');
    }
};
