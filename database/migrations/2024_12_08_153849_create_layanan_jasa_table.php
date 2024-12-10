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
        Schema::create('layanan_jasa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyedia_jasa_id')->constrained('penyedia_jasa')->onDelete('cascade');
            $table->string('namaJasa');
            $table->string('deskripsi');
            $table->float('harga');
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_jasa');
    }
};
