<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersalinanController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\KeluargaberencanaController;
use App\Http\Controllers\admin\KunjunganUlangKehamilanController;
use App\Http\Controllers\admin\PemeriksaanAwalKehamilanController;
use App\Http\Controllers\DataPenggunaController;

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

        Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
        Route::get('/pendaftaran/periksa/{id}', [PendaftaranController::class, 'periksa']);
        Route::post('periksa-persalinan', [PendaftaranController::class, 'persalinan_action'])->name('periksa_persalinan');
        Route::post('periksa-kb', [PendaftaranController::class, 'kb_action'])->name('periksa_kb');
        Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'hapus']);
        Route::get('/pendaftaran-reset', [PendaftaranController::class, 'reset']);

        Route::post('periksa-pemeriksaan-awal-kehamilan', [PendaftaranController::class, 'pemeriksaan_awal_kehamilan']);
        Route::post('periksa-kunjungan-ulang-kehamilan', [PendaftaranController::class, 'kunjungan_ulang_kehamilan']);

        Route::get('/persalinan', [PersalinanController::class, 'index']);
        Route::get('/persalinan/show/{id}', [PersalinanController::class, 'show']);
        Route::get('/persalinan/{id}', [PersalinanController::class, 'hapus']);
        Route::get('/kb', [KeluargaberencanaController::class, 'index']);
        Route::get('/kb/show/{id}', [KeluargaberencanaController::class, 'show']);
        Route::get('/kb/{id}', [KeluargaberencanaController::class, 'hapus']);

        Route::resource('pemeriksaan-awal-kehamilan', PemeriksaanAwalKehamilanController::class);
        Route::resource('kunjungan-ulang-kehamilan', KunjunganUlangKehamilanController::class);

        Route::get('/datapasien', [DataPenggunaController::class, 'dataPasien'])->name('datapasien.index');
        Route::get('/datapasien/show/{id}', [DataPenggunaController::class, 'showDataPasien']);
        Route::get('/datapasien/{id}', [DataPenggunaController::class, 'hapusDataPasien']);
        Route::put('updatestatus/{id}', [DataPenggunaController::class, 'updateStatus'])->name('updateStatus');

        Route::get('/databidan', [DataPenggunaController::class, 'dataBidan'])->name('databidan.index');
        Route::get('/databidan/create', [DataPenggunaController::class, 'createbidan'])->name('databidan.create');
        Route::post('/databidan', [DataPenggunaController::class, 'tambahDataBidan'])->name('databidan.store');
        Route::get('/databidan/{id}', [DataPenggunaController::class, 'hapusDataBidan']);
    });

    // route dashboard bidan
    Route::group(['middleware' => ['auth', 'cekLevel:bidan']], function () {
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

        Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
        Route::get('/pendaftaran/periksa/{id}', [PendaftaranController::class, 'periksa']);
        Route::post('periksa-persalinan', [PendaftaranController::class, 'persalinan_action'])->name('periksa_persalinan');
        Route::post('periksa-kb', [PendaftaranController::class, 'kb_action'])->name('periksa_kb');
        Route::get('/pendaftaran/{id}', [PendaftaranController::class, 'hapus']);
        Route::get('/pendaftaran-reset', [PendaftaranController::class, 'reset']);

        Route::post('periksa-pemeriksaan-awal-kehamilan', [PendaftaranController::class, 'pemeriksaan_awal_kehamilan']);
        Route::post('periksa-kunjungan-ulang-kehamilan', [PendaftaranController::class, 'kunjungan_ulang_kehamilan']);

        Route::get('/persalinan', [PersalinanController::class, 'index']);
        Route::get('/persalinan/show/{id}', [PersalinanController::class, 'show']);
        Route::get('/persalinan/{id}', [PersalinanController::class, 'hapus']);
        Route::get('/kb', [KeluargaberencanaController::class, 'index']);
        Route::get('/kb/show/{id}', [KeluargaberencanaController::class, 'show']);
        Route::get('/kb/{id}', [KeluargaberencanaController::class, 'hapus']);

        Route::resource('pemeriksaan-awal-kehamilan', PemeriksaanAwalKehamilanController::class);
        Route::resource('kunjungan-ulang-kehamilan', KunjunganUlangKehamilanController::class);
    });

    // pasien
    Route::group(['middleware' => ['auth', 'cekLevel:pasien']], function () {
        Route::get('home', [UserController::class, 'halaman_user'])->name('home');
        Route::get('registrasi', [UserController::class, 'registrasi'])->name('registrasi');
        Route::get('riwayat', [UserController::class, 'riwayat'])->name('riwayat');
        Route::get('profile', [UserController::class, 'profile'])->name('profile');


        Route::get('informasi', [UserController::class, 'informasi'])->name('informasi');
        Route::post('informasi', [KritikSaranController::class, 'store'])->name('kritiksaran.store');

        // pendaftaran kb
        Route::get('pendaftarankb', [UserController::class, 'pendaftarankb'])->name('pendaftarankb');
        Route::post('pendaftarankb', [UserController::class, 'storekb'])->name('kb.store');

        // pendaftaran persalinan
        Route::get('pendaftaranpersalinan', [UserController::class, 'pendaftaranpersalinan'])->name('pendaftaranpersalinan');
        Route::post('pendaftaranpersalinan', [UserController::class, 'storepersalinan'])->name('persalinan.store');

        // pendaftaran pemeriksaan awal
        Route::get('pendaftaranpemeriksaanawal', [UserController::class, 'pendaftaranpemeriksaanawal'])->name('pendaftaranpemeriksaanawal');
        Route::post('pendaftaranpemeriksaanawal', [UserController::class, 'storepemeriksaanawal'])->name('pemeriksaanawal.store');

        // pendaftaran kunjungan ulang
        Route::get('pendaftarankunjunganulang', [UserController::class, 'pendaftarankunjunganulang'])->name('pendaftarankunjunganulang');
        Route::post('pendaftarankunjunganulang', [UserController::class, 'storekunjunganulang'])->name('kunjunganulang.store');
    });
});
