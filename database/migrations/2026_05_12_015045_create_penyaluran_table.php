<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penyaluran', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('penerima_id')->nullable();

            $table->date('tanggal')->nullable();

            $table->integer('jumlah_bantuan')->nullable();

            $table->text('keterangan')->nullable();

            $table->string('bukti')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penyaluran');
    }
};