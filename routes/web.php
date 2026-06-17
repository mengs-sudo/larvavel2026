<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('index');
});

// About page
Route::get('/about', function () {
    return view('about');
});

// Book page
Route::get('/book', function () {
    return view('book');
});

// Menu page
Route::get('/menu', function () {
    return view('menu');
});