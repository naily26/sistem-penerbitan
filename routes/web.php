<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KbliController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengawasController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing', function () {
    return view('landing-page');
});
Route::get('/dashboard-pemohon', function () {
    return view('pemohon.dashboard.index');
});

Route::get('/kendaraan-pemohon', function () {
    return view('pemohon.kendaraan.index');
});

Route::get('/perusahaan-pemohon', function () {
    return view('pemohon.perusahaan.index');
});

Route::get('/perusahaan-pemohon-tambah', function () {
    return view('pemohon.perusahaan.create');
});

Route::get('/kendaraan-pemohon-tambah', function () {
    return view('pemohon.kendaraan.create');
});

Route::get('/dashboard-petugas', function () {
    return view('petugas.dashboard.index');
});

Route::get('/kendaraan-petugas', function () {
    return view('petugas.kendaraan.index');
});

Route::get('/perusahaan-petugas', function () {
    return view('petugas.perusahaan.index');
});

Route::get('/perusahaan-petugas-tambah', function () {
    return view('petugas.perusahaan.create');
});

Route::get('/kendaraan-petugas-tambah', function () {
    return view('petugas.kendaraan.create');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('kbli', KbliController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('pengawas', PengawasController::class);
});
