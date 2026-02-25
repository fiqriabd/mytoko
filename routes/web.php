<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('login'));

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function(){
    return view ('welcome');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/kategori/data', [KategoriController::class,'data']);
    Route::resource('/kategori', KategoriController::class);
});