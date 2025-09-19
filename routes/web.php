<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Data yang akan ditampilkan
    $nama  = 'Intan Nur Laila';
    $npm   = '2317051109';
    $kelas = 'PWL B';

    // kirim data ke view welcome.blade.php
    return view('welcome', compact('nama', 'npm', 'kelas'));
});
