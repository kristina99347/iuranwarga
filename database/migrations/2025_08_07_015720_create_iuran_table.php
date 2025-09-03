<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration (buat tabel iuran)
     */
    public function up(): void
    {
        Schema::create('iuran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id');   // relasi ke tabel warga
            $table->unsignedBigInteger('kategori_iuran_id')->nullable(); // relasi ke kategori iuran
            $table->date('tanggal');                  // tanggal bayar
            $table->integer('jumlah');                // jumlah iuran
            $table->string('keterangan')->nullable(); // catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Rollback migration (hapus tabel iuran)
     */
    public function down(): void
    {
        Schema::dropIfExists('iuran');
    }
};
