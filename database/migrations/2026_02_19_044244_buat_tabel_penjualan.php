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
        Schema::create('penjualan', function (Blueprint $tabel) {
            $tabel->increments('id_penjualan');
            $tabel->integer('total_item');
            $tabel->integer('total_harga');
            $tabel->integer('bayar');
            $tabel->integer('diterima');
            $tabel->integer('id_pengguna');
            $tabel->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
