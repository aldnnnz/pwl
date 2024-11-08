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
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->char('isbn', 13);
            $table->text('komentar');
            $table->tinyInteger('rating');
            $table->timestamp('waktu_dibuat')->nullable();
            $table->timestamp('waktu_diubah')->nullable();
            $table->foreign('isbn')->references('isbn')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
