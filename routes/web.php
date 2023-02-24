<?php

use App\Http\Controllers\admin\KunjunganUlangKehamilanController;
use App\Http\Controllers\admin\PemeriksaanAwalKehamilanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersalinanController;
use App\Http\Controllers\KeluargaberencanaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route login regis
Route::get('/', [LoginController::class, 'halaman_login'])->name('halaman_login');
Route::post('/', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/regis', [LoginController::class, 'halaman_regis'])->name('halaman_regis');
Route::post('/regis', [LoginController::class, 'register_action'])->name('register.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::namespace('App\Http\Controllers')->group(function () {
    // route dashboard admin
    Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
        // dashboard
        Route::get('dashboard-admin', [LoginController::class, 'dashboard_admin'])->name('dashboard-admin');

        Route::get('/persalinan', [PersalinanController::class, 'index']);
        Route::get('/persalinan/show/{id}', [PersalinanController::class, 'show']);
        Route::get('/persalinan/{id}', [PersalinanController::class, 'hapus']);
        Route::get('/persalinan/selesai/{id}', [PersalinanController::class, 'selesai']);
        Route::get('/kb', [KeluargaberencanaController::class, 'index']);
        Route::get('/kb/show/{id}', [KeluargaberencanaController::class, 'show']);
        Route::get('/kb/{id}', [KeluargaberencanaController::class, 'hapus']);
        Route::get('/kb/selesai/{id}', [KeluargaberencanaController::class, 'selesai']);

        Route::resource('pemeriksaan-awal-kehamilan',PemeriksaanAwalKehamilanController::class);
        Route::resource('kunjungan-ulang-kehamilan', KunjunganUlangKehamilanController::class);
    });

    // pasien
    Route::group(['middleware' => ['auth', 'cekLevel:pasien']], function () {
        Route::get('home', [UserController::class, 'halaman_user'])->name('home');
        Route::get('registrasi', [UserController::class, 'registrasi'])->name('registrasi');
        Route::get('riwayat', [UserController::class, 'riwayat'])->name('riwayat');
        Route::get('profile', [UserController::class, 'profile'])->name('profile');
        Route::get('informasi', [UserController::class, 'informasi'])->name('informasi');
    });
});
