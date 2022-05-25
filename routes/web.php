<?php

use App\Http\Controllers\BasisPengetahuanController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Route::resource('penyakit', PenyakitController::class)->except('create', 'show');
    Route::get('penyakit/delete/{penyakit}', [PenyakitController::class, 'destroy']);

    Route::resource('gejala', GejalaController::class)->except('create', 'show');
    Route::get('gejala/delete/{gejala}', [GejalaController::class, 'destroy']);

    Route::resource('basispengetahuan', BasisPengetahuanController::class)->except('create', 'show');
    Route::get('basispengetahuan/delete/{basispengetahuan}', [BasisPengetahuanController::class, 'destroy']);
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('laporan/delete/{laporan}', [LaporanController::class, 'destroy']);

    Route::resource('user', UserController::class)->except('create', 'show');
    Route::get('user/delete/{user}', [UserController::class, 'destroy']);
});
