<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Penulis extends Model
{
    use HasFactory;

    protected $table = 'penulis';

    protected $fillable = ['nama'];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'penulis_buku', 'id_penulis', 'isbn');
    }
}

