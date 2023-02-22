<?php

use Illuminate\Support\Facades\Route;
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

// route login
Route::get('/', [LoginController::class, 'halaman_login']);
Route::get('/regis', [LoginController::class, 'halaman_regis'])->name('halaman_regis');
Route::post('/dashboard', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// route dashboard admin
Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', function () {
            return view('Admin.Dashboard.dashboard');
        });
        Route::get('/persalinan', [PersalinanController::class, 'index']);
        Route::get('/riwayatpersalinan', [PersalinanController::class, 'riwayat']);
        Route::get('/kb', [KeluargaberencanaController::class, 'index']);
        Route::get('/riwayatkb', [KeluargaberencanaController::class, 'riwayat']);
    });
});
