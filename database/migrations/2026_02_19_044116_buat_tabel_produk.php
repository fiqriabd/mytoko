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
        Schema::create('produk', function (Blueprint $tabel) {
            $tabel->increments('id_produk');
            $tabel->unsignedInteger('id_kategori');
            $tabel->string('nama')->unique();
            $tabel->string('merk')->nullable();
            $tabel->integer('harga_beli');
            $tabel->integer('harga_jual');
            $tabel->integer('stok');
            $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
