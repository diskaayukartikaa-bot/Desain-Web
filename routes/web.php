<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini adalah tempat di mana Anda dapat mendaftarkan rute web untuk aplikasi.
| Semua rute ini dimuat oleh RouteServiceProvider dalam grup yang berisi 
| middleware "web". Sekarang sudah rapi, bersih, dan bebas dari duplikasi!
|
*/

// Halaman Utama / Home
Route::get('/', function () {
    return view('home');
});

// Halaman About Me
Route::get('/about', function () {
    return view('about');
});

// Halaman Services / Layanan Kreatif
Route::get('/services', function () {
    return view('services');
});

// Halaman Contact Resmi
Route::get('/contact', function () {
    return view('contact');
});

// --- RUTE PORTFOLIO DINAMIS (MENGGUNAKAN CONTROLLER HANDLER) ---
// Jalur Utama Galeri Portofolio
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Jalur Studi Kasus Jurnal Detail Berdasarkan ID (Metode STAR)
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

// --- RUTE AI CHAT MANAGER WIDGET ---
Route::post('/ai/chat', [ChatController::class, 'chat']);