<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\GaleriFotoController;
use App\Http\Controllers\Home\PengumumanController;
use App\Http\Controllers\Home\BeritaArtikelController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\GaleryFotoAdminController;
use App\Http\Controllers\Admin\PengumumanAdminController;
use App\Http\Controllers\Admin\GaleryVideoAdminController;
use App\Http\Controllers\Admin\BeritaArtikelAdminController;
use App\Http\Controllers\Home\GaleriVideoController;
use App\Http\Controllers\Pengurus\BeritaArtikelPengurusController;
use App\Http\Controllers\Pengurus\DashboardPengurusController;
use App\Http\Controllers\Pengurus\GaleryFotoPengurusController;
use App\Http\Controllers\Pengurus\GaleryVideoPengurusController;
use App\Http\Controllers\Pengurus\PengumumanPengurusController;

/*
|--------------------------------------------------------------------------
| Routes untuk Guest (belum login)
|--------------------------------------------------------------------------
*/

Route::get('/simkes', function () {
    return view('front-end.informasi.simkes');
})->name('simkes');

Route::get('/ikppm-na', function () {
    return view('front-end.informasi.ikppmna');
})->name('ikppm-na');


Route::get('/sejarah', function () {
    return view('front-end.profil.sejarah');
})->name('sejarah');
Route::get('/visi-dan-misi', function () {
    return view('front-end.profil.visimisi');
})->name('visi-misi');

Route::get('/madrasah-tsanawiyah', function () {
    return view('front-end.pendidikan.mts');
})->name('madrasah-tsanawiyah');

Route::get('/madrasah-aliyah', function () {
    return view('front-end.pendidikan.ma');
})->name('madrasah-aliyah');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/berita-artikel', [BeritaArtikelController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaArtikelController::class, 'show'])->name('berita.show');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');

Route::get('/galeri-foto', [GaleriFotoController::class, 'index'])->name('foto.index');
Route::get('/galeri-video', [GaleriVideoController::class, 'index'])->name('video.index');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});
/*
|--------------------------------------------------------------------------
| Routes untuk yang wajib login
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // ================= ADMIN =================
    Route::prefix('dashboard/admin')->name('admin.')->middleware('role:admin')->group(function () {
        Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard');
        Route::resource('users', UserController::class);
        Route::resource('berita-artikel', BeritaArtikelAdminController::class);
        Route::resource('pengumuman', PengumumanAdminController::class);
        Route::resource('galeri-foto', GaleryFotoAdminController::class);
        Route::resource('video', GaleryVideoAdminController::class);
        // tambahkan route admin lainnya di sini
    });

    // ================= PENGURUS =================
    Route::prefix('dashboard/pengurus')->name('pengurus.')->middleware('role:pengurus')->group(function () {
        Route::get('/', [DashboardPengurusController::class, 'index'])->name('dashboard');
        Route::resource('berita-artikel', BeritaArtikelPengurusController::class);
        Route::resource('pengumuman', PengumumanPengurusController::class);
        Route::resource('galeri-foto', GaleryFotoPengurusController::class);
        Route::resource('video', GaleryVideoPengurusController::class);
        // tambahkan route pengurus lainnya di sini
    });
});
