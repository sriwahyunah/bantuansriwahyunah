<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Dashboard\DashboardAdminController;

/*
|--------------------------------------------------------------------------
| MASTER CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Master\UserController;
use App\Http\Controllers\Master\JabatanController;
use App\Http\Controllers\Master\PangkatController;
use App\Http\Controllers\Master\StatusController;
use App\Http\Controllers\Master\TahunController;
use App\Http\Controllers\Master\PenerimaController;
use App\Http\Controllers\Master\KategoriBantuanController;
use App\Http\Controllers\Master\JenisBantuanController;
use App\Http\Controllers\Master\StatusPengajuanController;

/*
|--------------------------------------------------------------------------
| TRANSAKSI CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Transaksi\PengajuanController;
use App\Http\Controllers\Transaksi\VerifikasiController;
use App\Http\Controllers\Transaksi\PenyaluranController;
use App\Http\Controllers\Transaksi\BuktiPenyaluranController;
use App\Http\Controllers\Transaksi\BeritaController;
use App\Http\Controllers\Transaksi\KomentarController;

/*
|--------------------------------------------------------------------------
| ZONA
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\ZonaPenerima\ZonaPenerimaController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'home'])->name('home');

Route::get('/program', [LandingController::class, 'program'])->name('program');
Route::get('/program/{id}', [LandingController::class, 'detail'])->name('program.detail');

Route::get('/tentang', [LandingController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [LandingController::class, 'kontak'])->name('kontak');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login-admin', [UserAuthController::class, 'showLogin'])->name('login.admin');
    Route::post('/login-admin', [UserAuthController::class, 'login'])->name('login.process');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::middleware('web')->group(function () {

    Route::get('/dashboard', function () {

        if (!session('login_admin')) {
            return redirect()->route('login.admin');
        }

        return view('dashboard.index');
    })->name('dashboard');

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

    /*
    |--------------------------------------------------------------------------
    | MASTER
    |--------------------------------------------------------------------------
    */

    Route::resource('user', UserController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('pangkat', PangkatController::class);
    Route::resource('status', StatusController::class);
    Route::resource('tahun', TahunController::class);
    Route::resource('penerima', PenerimaController::class);

    Route::resource('kategori-bantuan', KategoriBantuanController::class);
    Route::resource('jenis-bantuan', JenisBantuanController::class);
    Route::resource('status-pengajuan', StatusPengajuanController::class);

    /*
    |--------------------------------------------------------------------------
    | TRANSAKSI
    |--------------------------------------------------------------------------
    */

    Route::resource('pengajuan', PengajuanController::class);
    Route::resource('verifikasi', VerifikasiController::class);
    Route::resource('penyaluran', PenyaluranController::class);
    Route::resource('bukti-penyaluran', BuktiPenyaluranController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('komentar', KomentarController::class);

    /*
    |--------------------------------------------------------------------------
    | ZONA PENERIMA
    |--------------------------------------------------------------------------
    */

    Route::resource('zona-penerima', ZonaPenerimaController::class);

    /*
    |--------------------------------------------------------------------------
    | PROGRAM (FIX SINGLE ROUTE ONLY)
    |--------------------------------------------------------------------------
    */

    Route::get('/program-list', [ProgramController::class, 'index'])->name('program.index');
});

/*
|--------------------------------------------------------------------------
| 404 FALLBACK
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

/*
|--------------------------------------------------------------------------
| kategori bantuan
|--------------------------------------------------------------------------
*/

Route::get('/kategori-admin', [KategoriBantuanController::class, 'index'])
    ->name('kategori-admin.index');

Route::get('/dashboard', [DashboardAdminController::class, 'index'])
    ->name('dashboard');

Route::get('/penerima', function () {
    return 'Halaman Penerima';
});

Route::get('/jabatan', function () {
    return 'Halaman Jabatan';
});

Route::get('/kategori', function () {
    return 'Halaman Kategori';
});

Route::get('/pengajuan', function () {
    return 'Halaman Pengajuan';
});
Route::resource('penerima', PenerimaController::class);

Route::resource('jabatan', JabatanController::class);
