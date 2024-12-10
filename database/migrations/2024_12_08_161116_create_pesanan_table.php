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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('layanan_jasa_id')->constrained('layanan_jasa')->onDelete('cascade');
            $table->date('waktuPemesanan');
            $table->enum('statusPembayaran', ['Belum dibayar', 'Sudah dibayar'])->default('Belum dibayar');
            $table->double('totalHarga');
            $table->enum('statusPesanan', ['Belum diproses', 'Sedang diproses', 'Selesai'])->default('Belum diproses');
            $table->text('ulasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
