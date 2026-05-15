<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerima', function (Blueprint $table) {

            $table->id();

            // 🔥 FIX UTAMA: relasi ke users
            $table->unsignedBigInteger('user_id')->nullable();

            $table->unsignedBigInteger('id_kategori_penerima')->nullable();
            $table->unsignedBigInteger('id_alamat')->nullable();

            $table->string('nik')->unique();
            $table->string('kk');
            $table->string('nama');

            $table->string('username')->unique();
            $table->string('password');

            $table->string('telepon')->nullable();

            $table->enum('status_verifikasi', [
                'pending',
                'diterima',
                'ditolak'
            ])->default('pending');

            $table->enum('status', [
                'aktif',
                'nonaktif'
            ])->default('aktif');

            $table->string('foto')->nullable();

            $table->timestamps();

            // 🔥 FOREIGN KEY (WAJIB UNTUK SISTEM BANTUAN)
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerima');
    }
};