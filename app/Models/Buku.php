<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penulis;
use App\Models\Review;


class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['isbn', 'judul'];

    public function penulis()
    {
        return $this->belongsToMany(Penulis::class, 'penulis_buku', 'isbn', 'id_penulis');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'isbn');
    }
}
