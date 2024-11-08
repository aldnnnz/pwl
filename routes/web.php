<?php
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{isbn}', [BukuController::class, 'show'])->name('buku.show');
Route::get('/penulis/{id}', [PenulisController::class, 'show'])->name('penulis.show');
