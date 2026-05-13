<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portofolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

use App\Http\Controllers\ChatController;

Route::post('/ai/chat', [ChatController::class, 'chat']);