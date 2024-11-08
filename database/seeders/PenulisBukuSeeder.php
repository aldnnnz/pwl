<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PenulisBuku;

class PenulisBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PenulisBuku::insert([
            ['id_penulis' => 1, 'isbn' => '9781234567891'],
            ['id_penulis' => 2, 'isbn' => '9781234567891'],
            ['id_penulis' => 3, 'isbn' => '9781234567892'],
            ['id_penulis' => 4, 'isbn' => '9781234567893'],
            ['id_penulis' => 1, 'isbn' => '9781234567894'],
            ['id_penulis' => 2, 'isbn' => '9781234567895'],
            ['id_penulis' => 3, 'isbn' => '9781234567896'],
            ['id_penulis' => 4, 'isbn' => '9781234567897'],
            ['id_penulis' => 1, 'isbn' => '9781234567898'],
            ['id_penulis' => 2, 'isbn' => '9781234567899'],
            ['id_penulis' => 3, 'isbn' => '9781234567800'],
        ]);
    }
}
