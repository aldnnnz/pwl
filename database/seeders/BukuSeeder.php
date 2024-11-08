<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::insert([
            ['isbn' => '9781234567891', 'judul' => 'Pemrograman Dasar'],
            ['isbn' => '9781234567892', 'judul' => 'Algoritma dan Struktur Data'],
            ['isbn' => '9781234567893', 'judul' => 'Basis Data Lanjut'],
            ['isbn' => '9781234567894', 'judul' => 'Sistem Operasi'],
            ['isbn' => '9781234567895', 'judul' => 'Jaringan Komputer'],
            ['isbn' => '9781234567896', 'judul' => 'Pemrograman Web'],
            ['isbn' => '9781234567897', 'judul' => 'Pemrograman Mobile'],
            ['isbn' => '9781234567898', 'judul' => 'Pengantar AI'],
            ['isbn' => '9781234567899', 'judul' => 'Pembelajaran Mesin'],
            ['isbn' => '9781234567800', 'judul' => 'Keamanan Siber'],
        ]);
    }
}
