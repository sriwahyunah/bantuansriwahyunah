<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| CONTROLLER
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Landing\LandingController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\PenerimaAuthController;
use App\Http\Controllers\Auth\RegisterPenerimaController;

use App\Http\Controllers\Dashboard\AdminDashboardController;
use App\Http\Controllers\Dashboard\PetugasDashboardController;
use App\Http\Controllers\Dashboard\PenerimaDashboardController;

use App\Http\Controllers\Master\UserController;
use App\Http\Controllers\Master\JabatanController;
use App\Http\Controllers\Master\PangkatController;
use App\Http\Controllers\Master\StatusController;
use App\Http\Controllers\Master\TahunController;
use App\Http\Controllers\Master\PenerimaController;
use App\Http\Controllers\Master\KategoriBantuanController;
use App\Http\Controllers\Master\JenisBantuanController;
use App\Http\Controllers\Master\StatusPengajuanController;

use App\Http\Controllers\Transaksi\PengajuanController;
use App\Http\Controllers\Transaksi\VerifikasiController;
use App\Http\Controllers\Transaksi\PenyaluranController;
use App\Http\Controllers\Transaksi\BuktiPenyaluranController;
use App\Http\Controllers\Transaksi\BeritaController;
use App\Http\Controllers\Transaksi\KomentarController;

use App\Http\Controllers\Laporan\LaporanController;
use App\Http\Controllers\Laporan\LaporanBulananController;
use App\Http\Controllers\Laporan\LaporanTahunanController;
use App\Http\Controllers\Laporan\LaporanPenyaluranController;

/*
|--------------------------------------------------------------------------
| LANDING
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'home'])
    ->name('home');

Route::get('/berita', [LandingController::class, 'berita'])
    ->name('landing.berita');

Route::get(
    '/detail-berita/{slug}',
    [LandingController::class, 'detailBerita']
)
    ->name('landing.detailberita');

Route::get(
    '/kategori/{slug}',
    [LandingController::class, 'kategori']
)
    ->name('landing.kategori');

Route::get(
    '/tentang',
    [LandingController::class, 'tentang']
)
    ->name('landing.tentang');

Route::get(
    '/kontak',
    [LandingController::class, 'kontak']
)
    ->name('landing.kontak');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get(
    '/login-user',
    [LoginController::class, 'loginUser']
)
    ->name('login.user');

Route::post(
    '/login-user',
    [UserAuthController::class, 'login']
)
    ->name('login.user.proses');

Route::get(
    '/login-penerima',
    [LoginController::class, 'loginPenerima']
)
    ->name('login.penerima');

Route::post(
    '/login-penerima',
    [PenerimaAuthController::class, 'login']
)
    ->name('login.penerima.proses');

Route::get(
    '/register-penerima',
    [RegisterPenerimaController::class, 'index']
)
    ->name('register.penerima');

Route::post(
    '/register-penerima',
    [RegisterPenerimaController::class, 'store']
)
    ->name('register.penerima.store');

Route::post(
    '/logout',
    [LoginController::class, 'logout']
)
    ->name('logout');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get(
            '/dashboard',
            [AdminDashboardController::class, 'index']
        )
            ->name('admin.index');

        Route::resource(
            'penerima',
            PenerimaController::class
        )->names('admin.penerima.');
    });

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

Route::resource(
    'kategori-bantuan',
    KategoriBantuanController::class
);

Route::resource(
    'jenis-bantuan',
    JenisBantuanController::class
);

Route::resource(
    'status-pengajuan',
    StatusPengajuanController::class
);

/*
        |--------------------------------------------------------------------------
        | TRANSAKSI
        |--------------------------------------------------------------------------
        */

Route::resource(
    'pengajuan',
    PengajuanController::class
);

Route::resource(
    'verifikasi',
    VerifikasiController::class
);

Route::resource(
    'penyaluran',
    PenyaluranController::class
);

Route::resource(
    'bukti-penyaluran',
    BuktiPenyaluranController::class
);

Route::resource(
    'berita',
    BeritaController::class
);

Route::resource(
    'komentar',
    KomentarController::class
);

/*
        |--------------------------------------------------------------------------
        | LAPORAN
        |--------------------------------------------------------------------------
        */

Route::get(
    '/laporan',
    [LaporanController::class, 'index']
)
    ->name('laporan.index');

Route::get(
    '/laporan-bulanan',
    [LaporanBulananController::class, 'index']
)
    ->name('laporanbulanan.index');

Route::get(
    '/laporan-bulanan/cetak',
    [LaporanBulananController::class, 'cetak']
)
    ->name('laporanbulanan.cetak');

Route::get(
    '/laporan-tahunan',
    [LaporanTahunanController::class, 'index']
)
    ->name('laporantahunan.index');

Route::get(
    '/laporan-tahunan/cetak',
    [LaporanTahunanController::class, 'cetak']
)
    ->name('laporantahunan.cetak');

Route::get(
    '/laporan-penyaluran',
    [LaporanPenyaluranController::class, 'index']
)
    ->name('laporanpenyaluran.index');

Route::get(
    '/laporan-penyaluran/cetak',
    [LaporanPenyaluranController::class, 'cetak']
)
    ->name('laporanpenyaluran.cetak');


/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:petugas'])
    ->prefix('petugas')
    ->group(function () {

        Route::get(
            '/dashboard',
            [PetugasDashboardController::class, 'index']
        )
            ->name('petugas.dashboard');

        Route::resource(
            'pengajuan',
            PengajuanController::class
        );

        Route::resource(
            'verifikasi',
            VerifikasiController::class
        );

        Route::resource(
            'penyaluran',
            PenyaluranController::class
        );

        Route::resource(
            'berita',
            BeritaController::class
        );
    });

/*
|--------------------------------------------------------------------------
| PENERIMA
|--------------------------------------------------------------------------
*/

Route::resource(
    'penerima',
    PenerimaController::class
)->names('admin.penerima');


Route::get(
    '/penerima/{id}/edit',
    [PenerimaController::class, 'edit']
)->name('penerima.edit');


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get(
    '/login-user',
    [UserAuthController::class, 'login']
)
    ->name('login.user');

Route::post(
    '/login-user',
    [UserAuthController::class, 'prosesLogin']
)
    ->name('login.user.proses');

Route::post(
    '/logout',
    [UserAuthController::class, 'logout']
)
    ->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {

        Route::get(
            '/dashboard',
            [AdminDashboardController::class, 'index']
        );
    });



Route::get('/user', [UserController::class, 'index']);

/*
        |--------------------------------------------------------------------------
        | PENGAJUAN
        |--------------------------------------------------------------------------
        */

Route::resource(
    'pengajuan',
    PengajuanController::class
)->names('admin.pengajuan');

Route::get(
    '/pengajuan/detail/{id}',
    [PengajuanController::class, 'detail']
);

Route::get(
    '/pengajuan/{id}/edit',
    [PengajuanController::class, 'edit']
)
    ->name('pengajuan.edit');

Route::put(
    '/pengajuan/{id}/update',
    [PengajuanController::class, 'update']
)
    ->name('pengajuan.update');

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::post('/user/store', [UserController::class, 'store'])
    ->name('user.store');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/update/{id}', [UserController::class, 'update'])
    ->name('user.update');

Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])
    ->name('user.delete');

    /*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::post('/logout', function () {

    Auth::logout();

    Session::flush();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/login');

});