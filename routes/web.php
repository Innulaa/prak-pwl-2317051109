<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController; // 🔥 tambahkan ini

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

// 📘 Mata Kuliah Routes
Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');
