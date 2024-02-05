<?php

use App\Http\Controllers\AuthControlller;
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


// Landing page route
Route::get('/', function () {
    return view('landing_page');
});

// Login routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::post('/login', [AuthControlller::class, 'login']);


// Register route
Route::get('/register', function () {
    return view('auth.register');
});

