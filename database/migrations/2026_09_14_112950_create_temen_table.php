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
        Schema::create('temen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_teman');
            $table->date('tanggal_lahir');
            $table->integer('nomor_kursi');
            $table->string('hobi');
            $table->string('makanan_favorit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temen');
    }
};
