<?php

use App\Http\Controllers\InstansiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Requests\PegawaiRequest;
use App\Models\UnitKerja;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('pegawai', [PegawaiController::class, 'index'])->name('index');
    Route::get('pegawai/create', [PegawaiController::class, 'create'])->name('create');
    Route::post('pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('pegawai/{pegawai:slug}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('pegawai/{pegawai:slug}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::get('pegawai/{pegawai:slug}/delete', [PegawaiController::class, 'destroy'])->name('pegawai.delete');
    Route::get('pegawai/cetak', [PegawaiController::class, 'cetak'])->name('cetak');
    Route::get('create/pdf', [PegawaiController::class, 'createPdf'])->name('createPdf');



    Route::get('instansi', [InstansiController::class, 'index'])->name('instansi');
    Route::get('instansi/create', [InstansiController::class, 'create'])->name('instansi.create');
    Route::post('instansi', [InstansiController::class, 'store'])->name('instansi.store');
    Route::get('instansi/{instansi:slug}/edit', [InstansiController::class, 'edit'])->name('instansi.edit');
    Route::put('instansi/{instansi:slug}', [InstansiController::class, 'update'])->name('instansi.update');
    Route::get('instansi/{instansi:slug}/delete', [InstansiController::class, 'destroy'])->name('instansi.delete');
    Route::get('pegawai-instansi/{instansi:slug}', [InstansiController::class, 'pegawai_instansi'])->name('pegawai.instansi');
});
