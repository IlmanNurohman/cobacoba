<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        Mahasiswa::create([
            'nama' => 'Ahmad Firdaus',
            'nim' => '202310001',
            'jurusan' => 'Teknik Informatika',
            'email' => 'ahmad@example.com'
        ]);

        Mahasiswa::create([
            'nama' => 'Siti Aisyah',
            'nim' => '202310002',
            'jurusan' => 'Sistem Informasi',
            'email' => 'siti@example.com'
        ]);
    }
}