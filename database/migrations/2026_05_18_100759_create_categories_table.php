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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Menyimpan nama kategori (contoh: Projects & Films)
            $table->string('slug');  // Menyimpan slug untuk filter (contoh: projects)
            $table->string('color'); // Menyimpan warna badge (contoh: pink, purple, orange)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};