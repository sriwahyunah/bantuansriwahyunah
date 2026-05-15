<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run migrations.
     */
    public function up(): void
    {
        Schema::create('jenis_bantuan', function (Blueprint $table) {

            $table->id();

            $table->string('kode_jenis')->unique();

            $table->string('nama_jenis');

            $table->text('deskripsi')->nullable();

            $table->enum('status', [
                'aktif',
                'nonaktif'
            ])->default('aktif');

            $table->timestamps();
        });
    }

    /**
     * Reverse migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_bantuan');
    }
};