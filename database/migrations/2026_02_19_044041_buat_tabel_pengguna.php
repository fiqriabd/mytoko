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
        Schema::create('pengguna', function (Blueprint $tabel) {
            $tabel->id();
            $tabel->string('nama');
            $tabel->string('email')->unique();
            $tabel->string('password');
            $tabel->string('foto')->nullable();
            $tabel->tinyInteger('level')->default(0);
            $tabel->rememberToken();
            $tabel->foreignId('current_team_id')->nullable();
            $tabel->text('path_foto_profil')->nullable();
            $tabel->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
