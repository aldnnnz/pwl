<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $fillable = ['isbn', 'komentar', 'rating', 'waktu_dibuat', 'waktu_diubah'];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'isbn');
    }
}

