<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasi')->insert([
            'nama' => 'Kalyca',
            'tempat_lahir' => 'Garut',
            'tanggal_lahir' => '2008-05-30',
            'agama' => 'Islam',
            'alamat' => 'Jl. Pataruman, Kp. Pedes',
            'email' => 'nisakalyca@gmail.com',
            'hp' => '+6285652032008',
        ]);
    }
}
