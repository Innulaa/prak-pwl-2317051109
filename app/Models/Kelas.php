<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = ['nama_kelas'];

    // Tambahkan method baru di sini
    public static function getKelas()
    {
        return self::all(); // ambil semua data kelas dari database
    }
}
