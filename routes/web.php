<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/portofolio', function () {
    return view('portfolio');
});

Route::get('/about', function () {
    return view('about'); // Mengarah ke file about.blade.php
});