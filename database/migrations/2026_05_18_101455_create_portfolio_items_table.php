<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            
            // ELEMEN UTAMA: Garis penghubung relasi (Foreign Key) yang menyambung ke tabel categories
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            
            $table->string('slug_id'); // Menyimpan id modal (contoh: film-nasional)
            $table->string('badge');   // Menyimpan teks badge (contoh: Film Production)
            $table->string('title');   // Judul kegiatan/prestasi
            $table->text('desc');      // Deskripsi singkat kegiatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_items');
    }
};