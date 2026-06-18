<?php

use Illuminate\Support\Facades\Route;

// Public pages
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/book', function () {
    return view('book');
})->name('book');

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard route (protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Logout route
Route::post('/logout', function () {
    // Add your logout logic here
    return redirect('/');
})->name('logout');