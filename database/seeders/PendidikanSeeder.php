<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikans')->insert(
        [
            'tahun_masuk' => '2023',
            'tahun_keluar' => '2026',
            'asal_sekolah' => 'SMK Negeri 1 Garut'
        ]
    );
    }
}
