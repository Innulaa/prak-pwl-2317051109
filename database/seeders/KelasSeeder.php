<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;   // 🔑 import model Kelas

class KelasSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        // Masukkan 4 data kelas
        $data = ['A', 'B', 'C', 'D'];

        foreach ($data as $nama) {
            Kelas::create([
                'nama_kelas' => $nama
            ]);
        }
    }
}
