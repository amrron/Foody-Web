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
        Schema::create('catatan_makanans', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->foreignUuid('user_id')->constrained();
            $table->foreignUuid('makanan_id')->constrained();
            $table->timestamp('waktu');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_makanans');
    }
};
