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
        Schema::create('pengaturan', function (Blueprint $tabel) {
            $tabel->increments('id_pengaturan');
            $tabel->string('nama_perusahaan');
            $tabel->text('alamat')->nullable();
            $tabel->string('telepon');
            $tabel->string('path_logo');
            $tabel->tinyInteger('tipe_nota');
            $tabel->timestamps();   
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan');
    }
};
