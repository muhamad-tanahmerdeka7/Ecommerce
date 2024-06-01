<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('pages.dashboard', ['type_menu' => 'dashboard']);
// });


// Route::get('/', function () {
//     // return view('welcome');
//     return view('auth.login', ['type_menu' => '']);
// });

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('home', function () {
//         return view('pages.blank-page', ['type_menu' => '']);
//     })->name('home');
// });


Route::get('/', function () {
    // return view('welcome');
    return view('auth.login', ['type_menu' => '']);
});

// harus tambahkan ini jika ingin melakukan verify 'verified'
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => '']);
    })->name('home');
});

// Route::get('/', function () {
//     return view('auth.register');
// });

// Route::get('/reset', function () {
//     return view('auth.reset');
// });

// Route::get('/forgot', function () {
//     return view('auth.forgot');
// });

// Route::get('/verify', function () {
//     return view('auth.verify');
// });