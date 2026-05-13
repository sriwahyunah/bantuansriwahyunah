<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('login_histories')) {

            Schema::create('login_histories', function (Blueprint $table) {

                $table->id();

                // TANPA FOREIGN KEY
                $table->unsignedBigInteger('user_id')->nullable();

                $table->string('ip_address')->nullable();
                $table->text('user_agent')->nullable();
                $table->timestamp('login_at')->nullable();

                $table->timestamps();
            });

        }
    }

    public function down(): void
    {
        Schema::dropIfExists('login_histories');
    }
};