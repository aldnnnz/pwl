<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penulis;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penulis::insert([
            ['nama' => 'Agus Widodo'],
            ['nama' => 'Budi Santoso'],
            ['nama' => 'Citra Lestari'],
            ['nama' => 'Dewi Maharani']
        ]);
    }
}
