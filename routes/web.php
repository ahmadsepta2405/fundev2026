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

Route::get('/', fn()=>view('dashboard'));
Route::get('/service', fn()=>view('service'));
Route::get('/customers', fn()=>view('customers'));
Route::get('/spareparts', fn()=>view('spareparts'));
Route::get('/location', fn()=>view('location'));
Route::get('/profile', fn()=>view('profile'));

// Kepuasan Pelanggan
Route::get('/satisfaction', function () {
    return view('satisfaction');
});
