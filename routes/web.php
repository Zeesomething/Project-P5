<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\StrukturalController;
use App\Http\Controllers\User\UserEskulController;
use App\Http\Controllers\User\UserGuruController;
use App\Http\Controllers\User\UserJurusanController;
use App\Http\Controllers\User\UserStrukturalController;
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

Route::get('/', [App\Http\Controllers\UserLandingController::class, 'index'])->name('landing');
Route::get('/artikel/{id}', [BerandaController::class, 'show'])->name('beranda.show');

// Guru
Route::get('/guru', [UserGuruController::class, 'index'])->name('guru');

// Struktural
Route::get('/struktural', [UserStrukturalController::class, 'index'])->name('struktural');

// Eskul
Route::get('/eskul', [UserEskulController::class, 'index'])->name('eskul');

// Jurusan
Route::get('/jurusan', [UserJurusanController::class, 'index'])->name('jurusan');

Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/landing', [App\Http\Controllers\UserLandingController::class, 'index'])->name('landing');

Route::group(['prefix' => 'admin'], function () {
// CRUD Jabatan
    Route::resource('jabatan', JabatanController::class);

// CRUD Mapel
    Route::resource('mapel', MapelController::class);

// CRUD Guru
    Route::resource('guru', GuruController::class);

// CRUD Struktural
    Route::resource('struktural', StrukturalController::class);

// CRUD Artikel
    Route::resource('artikel', ArtikelController::class);

// CRUD Jurusan
    Route::resource('jurusan', JurusanController::class);

// CRUD Eskul
    Route::resource('eskul', EskulController::class);
});
