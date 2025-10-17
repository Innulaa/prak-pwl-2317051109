<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

// 🏠 Halaman Utama (Welcome Page)
Route::get('/', function () {
    $nama  = 'Intan Nur Laila';
    $npm   = '2317051109';
    $kelas = 'PWL B';

    return view('welcome', compact('nama', 'npm', 'kelas'));
})->name('home');

// 👤 Resource Route untuk User (CRUD Lengkap: index, create, store, edit, update, destroy)
Route::resource('user', UserController::class);

// 📄 Profile Page
Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

// 📘 MATA KULIAH ROUTES (CRUD: CREATE, READ, UPDATE, DELETE)

// Read - Menampilkan daftar mata kuliah
Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');

// Create - Menampilkan form tambah mata kuliah
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');

// Store - Menyimpan data mata kuliah baru
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');

// Edit - Menampilkan form edit berdasarkan UUID
Route::get('/matakuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');

// Update - Menyimpan perubahan data mata kuliah
Route::put('/matakuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update');

// Delete - Menghapus data mata kuliah
Route::delete('/matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
