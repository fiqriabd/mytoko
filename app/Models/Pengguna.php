<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;

class Pengguna extends Authenticatable
{
    use Notifiable, HasApiTokens, HasProfilePhoto;

    protected $table = 'pengguna';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'level',
        'path_foto_profil',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getProfilePhotoUrlAttribute(){
        return $this->path_foto_profil
            ? asset('storage/' . $this->path_foto_profil)
            : $this->defaultProfilePhotoUrl();
    }
}
