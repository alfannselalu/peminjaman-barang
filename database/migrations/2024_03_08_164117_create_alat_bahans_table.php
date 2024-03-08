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
        Schema::create('alat_bahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('spesifikasi');
            $table->string('lokasi');
            $table->string('kondisi');
            $table->integer('jumlah_barang');
            $table->string('sumber_dana')->nullable();            
            $table->string('image')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_bahans');
    }
};
