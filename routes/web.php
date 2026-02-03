<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Profile Service
Route::get('/profile', function () {
    return view('profile');
});

// Service
Route::get('/service', function () {
    return view('service');
});
Route::get('/service/laptop', function () {
    return view('service', ['category' => 'laptop']);
});
Route::get('/service/hp', function () {
    return view('service', ['category' => 'hp']);
});
Route::get('/service/komputer', function () {
    return view('service', ['category' => 'komputer']);
});

// Kepuasan Pelanggan
Route::get('/satisfaction', function () {
    return view('satisfaction');
});
