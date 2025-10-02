<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



// 🏠 Halaman Utama (Welcome Page)
Route::get('/', function () {
    $nama  = 'Intan Nur Laila';
    $npm   = '2317051109';
    $kelas = 'PWL B';

    return view('welcome', compact('nama', 'npm', 'kelas'));
})->name('home');

// 👤 Resource Route untuk User (CRUD: index, create, store, edit, update, destroy)
Route::resource('user', UserController::class);

// 📄 Profile Page
Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');
