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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Lengkap
            $table->string('username')->unique(); // Username
            $table->string('noTelepon'); // Nomor Telepon
            $table->string('email')->unique(); // Email
            $table->date('birthdate')->nullable(); // Tanggal Lahir
            $table->string('gender')->nullable(); // Jenis Kelamin
            $table->string('alamat')->nullable();
            $table->string('password'); // Password
            $table->string('role', ['admin', 'penyedia_jasa', 'pengguna'])->default('pengguna'); // Defaultnya pengguna, bisa jadi admin atau penyedia jasa
            $table->timestamp('email_verified_at')->nullable(); // Email Verified
            $table->rememberToken(); // Token untuk 'remember me'
            $table->timestamps(); // Tanggal dan waktu pembuatan/ubah record
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('users');
    Schema::dropIfExists('password_reset_tokens');
    Schema::dropIfExists('sessions');
}
};
