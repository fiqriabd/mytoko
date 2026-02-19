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
        Schema::create('penjualan_detail', function (Blueprint $tabel) {
        $tabel->increments('id_penjualan_detail');
        $tabel->integer('id_penjualan');
        $tabel->integer('id_produk');
        $tabel->integer('harga_jual');
        $tabel->integer('jumlah');
        $tabel->integer('subtotal');
        $tabel->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_detail');
    }
};
