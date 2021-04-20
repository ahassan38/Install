<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('pages/Mon Appli');
})->name('home');

Route::get('/about-us', function() {
    return view('pages/about');
})->name('about');

Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');
