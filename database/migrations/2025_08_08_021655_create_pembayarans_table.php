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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel warga
            $table->unsignedBigInteger('warga_id');
            $table->foreign('warga_id')
                  ->references('id')
                  ->on('warga')
                  ->onDelete('cascade');

            // Relasi ke tabel kategori_iuran
            $table->unsignedBigInteger('kategori_iuran_id');
            $table->foreign('kategori_iuran_id')
                  ->references('id')
                  ->on('kategori_iuran')
                  ->onDelete('cascade');

            $table->date('tanggal_bayar');
            $table->decimal('jumlah', 15, 2);
            $table->string('metode_bayar'); // contoh: cash, transfer
            $table->string('bukti_bayar')->nullable(); // path file bukti pembayaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
