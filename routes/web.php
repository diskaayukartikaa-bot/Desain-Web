<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Saya satukan rute portfolio Anda ke file 'portfolio.blade.php'
Route::get('/portofolio', function () {
    return view('portfolio');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

// Rute untuk AI Chat Manager
Route::post('/ai/chat', [ChatController::class, 'chat']);

use App\Http\Controllers\PortfolioController;

// Jalur web menuju halaman detail portofolio berdasarkan ID data
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');