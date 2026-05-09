<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\UserAuthController;


/*
|--------------------------------------------------------------------------
| LANDING PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'home'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| PROGRAM
|--------------------------------------------------------------------------
*/

Route::get('/program', [LandingController::class, 'program'])
    ->name('program');

Route::get('/program/{id}', [LandingController::class, 'detail'])
    ->name('program.detail');


/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/

Route::get('/tentang', [LandingController::class, 'tentang'])
    ->name('tentang');


/*
|--------------------------------------------------------------------------
| KONTAK
|--------------------------------------------------------------------------
*/

Route::get('/kontak', [LandingController::class, 'kontak'])
    ->name('kontak');


/*
|--------------------------------------------------------------------------
| DAFTAR ISI
|--------------------------------------------------------------------------
*/

Route::get('/daftarisi', [LandingController::class, 'daftarisi'])
    ->name('daftarisi');


/*
|--------------------------------------------------------------------------
| KATEGORI LANDING
|--------------------------------------------------------------------------
*/

Route::get('/kategori', [LandingController::class, 'kategori'])
    ->name('kategori');


/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/login-admin', [UserAuthController::class, 'showLogin'])
    ->name('login.admin');

Route::post('/login-admin', [UserAuthController::class, 'login'])
    ->name('login.process');


/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');


/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', [UserAuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| CRUD KATEGORI
|--------------------------------------------------------------------------
*/

Route::resource('kategori-admin', KategoriController::class);