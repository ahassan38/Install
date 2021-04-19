<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('pages/Mon Appli');
});

Route::get('/about-us', function() {
    return view('pages/about');
});
