<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PenulisBuku extends Model
{
    use HasFactory;

    protected $table = 'penulis_buku';

    protected $fillable = ['id_penulis', 'isbn'];
}
