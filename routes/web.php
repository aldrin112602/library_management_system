<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_page');
});

// login get route
Route::get('/login', function () {
    return view('auth/login');
});

// Register get route
Route::get('/register', function () {
    return view('auth/register');
});

// Login post route
Route::post('/login', function () {
    return view('auth/login');
});
