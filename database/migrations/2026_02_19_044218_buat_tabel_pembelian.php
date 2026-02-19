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
        Schema::create('pembelian', function (Blueprint $tabel) {
            $tabel->increments('id_pembelian');
            $tabel->integer('id_distributor');
            $tabel->integer('total_item');
            $tabel->integer('total_harga');
            $tabel->tinyInteger('diskon')->default(0);
            $tabel->integer('bayar');
            $tabel->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
