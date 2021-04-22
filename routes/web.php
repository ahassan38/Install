<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('pages/Mon Appli');
})->name('home');

Route::get('/about-us', function() {
    return view('pages/about');
})->name('about');

Route::get('/help', function() {
    return view('pages.help');
})->name('help');

Auth::routes();

Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');
