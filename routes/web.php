<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// route login bidan
Route::get('/', [LoginController::class, 'halaman_login']);
Route::get('/regis', [LoginController::class, 'halaman_regis'])->name('halaman_regis');
Route::post('/dashboard', [LoginController::class, 'login_action'])->name('login.action');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// route dashboard bidan
Route::namespace('App\Http\Controllers')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', function () {
            return view('Bidan.Dashboard.dashboard');
        });
    });
});
