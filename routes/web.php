<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Pagecontroller;
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


// Authentification users

Route::get('/login', [LoginController::class, 'loginview'])->name('login');

Route::get('/register', [RegisterController::class, 'registerform'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);





Route::get('/', [Pagecontroller::class, 'home'])->name('home');

Route::get('/campus', [Pagecontroller::class, 'campus'])->name('campus');

Route::get('/contact', [Pagecontroller::class, 'contact'])->name('contact');
