<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Halaman utama
Route::get('/', function () {
    // Data yang akan ditampilkan
    $nama  = 'Intan Nur Laila';
    $npm   = '2317051109';
    $kelas = 'PWL B';

    // kirim data ke view welcome.blade.php
    return view('welcome', compact('nama', 'npm', 'kelas'));
})->name('home');

// Menampilkan daftar user
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Form untuk tambah user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Proses simpan user baru
Route::post('/user', [UserController::class, 'store'])->name('user.store');
