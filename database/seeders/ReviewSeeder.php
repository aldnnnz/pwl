<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::insert([
            ['isbn' => '9781234567891', 'komentar' => 'Sangat informatif!', 'rating' => 5, 'waktu_dibuat' => '2024-01-01 10:00:00', 'waktu_diubah' => '2024-01-02 12:00:00'],
            ['isbn' => '9781234567891', 'komentar' => 'Bahasanya mudah dipahami.', 'rating' => 4, 'waktu_dibuat' => '2024-01-05 11:00:00', 'waktu_diubah' => '2024-01-06 13:00:00'],
            ['isbn' => '9781234567892', 'komentar' => 'Penjelasan terlalu singkat.', 'rating' => 3, 'waktu_dibuat' => '2024-02-10 09:30:00', 'waktu_diubah' => '2024-02-11 14:45:00'],
            ['isbn' => '9781234567892', 'komentar' => 'Sangat membantu untuk pemula.', 'rating' => 5, 'waktu_dibuat' => '2024-02-15 10:15:00', 'waktu_diubah' => '2024-02-16 15:00:00'],
            ['isbn' => '9781234567893', 'komentar' => 'Cukup lengkap.', 'rating' => 4, 'waktu_dibuat' => '2024-03-01 08:45:00', 'waktu_diubah' => '2024-03-02 11:30:00'],
            ['isbn' => '9781234567893', 'komentar' => 'Perlu tambahan materi.', 'rating' => 3, 'waktu_dibuat' => '2024-03-05 13:20:00', 'waktu_diubah' => '2024-03-06 14:50:00'],
            ['isbn' => '9781234567894', 'komentar' => 'Bagus untuk pemahaman awal.', 'rating' => 4, 'waktu_dibuat' => '2024-04-10 07:10:00', 'waktu_diubah' => '2024-04-11 10:05:00'],
            ['isbn' => '9781234567894', 'komentar' => 'Lumayan, tapi kurang mendalam.', 'rating' => 3, 'waktu_dibuat' => '2024-04-15 12:35:00', 'waktu_diubah' => '2024-04-16 16:10:00'],
            ['isbn' => '9781234567895', 'komentar' => 'Topik menarik.', 'rating' => 4, 'waktu_dibuat' => '2024-05-05 09:55:00', 'waktu_diubah' => '2024-05-06 12:30:00'],
            ['isbn' => '9781234567895', 'komentar' => 'Detail dan rinci.', 'rating' => 5, 'waktu_dibuat' => '2024-05-10 14:40:00', 'waktu_diubah' => '2024-05-11 17:15:00'],
            ['isbn' => '9781234567896', 'komentar' => 'Tidak sesuai harapan.', 'rating' => 2, 'waktu_dibuat' => '2024-06-01 08:25:00', 'waktu_diubah' => '2024-06-02 11:15:00'],
            ['isbn' => '9781234567896', 'komentar' => 'Butuh pembahasan lebih detail.', 'rating' => 3, 'waktu_dibuat' => '2024-06-15 13:55:00', 'waktu_diubah' => '2024-06-16 15:20:00'],
            ['isbn' => '9781234567897', 'komentar' => 'Panduan yang bagus.', 'rating' => 4, 'waktu_dibuat' => '2024-07-03 10:00:00', 'waktu_diubah' => '2024-07-04 12:45:00'],
            ['isbn' => '9781234567897', 'komentar' => 'Sangat bermanfaat!', 'rating' => 5, 'waktu_dibuat' => '2024-07-08 11:25:00', 'waktu_diubah' => '2024-07-09 13:30:00'],
            ['isbn' => '9781234567898', 'komentar' => 'Terlalu rumit.', 'rating' => 3, 'waktu_dibuat' => '2024-08-05 09:15:00', 'waktu_diubah' => '2024-08-06 10:40:00'],
            ['isbn' => '9781234567898', 'komentar' => 'Harusnya ada contoh kasus.', 'rating' => 3, 'waktu_dibuat' => '2024-08-15 14:10:00', 'waktu_diubah' => '2024-08-16 15:45:00'],
            ['isbn' => '9781234567899', 'komentar' => 'Membuka wawasan baru.', 'rating' => 5, 'waktu_dibuat' => '2024-09-01 08:50:00', 'waktu_diubah' => '2024-09-02 11:00:00'],
            ['isbn' => '9781234567899', 'komentar' => 'Penjelasan kurang detail.', 'rating' => 4, 'waktu_dibuat' => '2024-09-10 10:40:00', 'waktu_diubah' => '2024-09-11 12:55:00'],
            ['isbn' => '9781234567800', 'komentar' => 'Topik yang sangat menarik.', 'rating' => 5, 'waktu_dibuat' => '2024-10-05 09:30:00', 'waktu_diubah' => '2024-10-06 11:15:00'],
            ['isbn' => '9781234567800', 'komentar' => 'Sangat direkomendasikan!', 'rating' => 5, 'waktu_dibuat' => '2024-10-10 13:20:00', 'waktu_diubah' => '2024-10-11 15:05:00']
        ]);
    }
}
