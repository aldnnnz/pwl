<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('penulis_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penulis')->constrained('penulis');
            $table->char('isbn', 13);
            $table->foreign('isbn')->references('isbn')->on('buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penulis_buku');
    }
};
