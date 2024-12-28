<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SppdController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SuratTugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::post('login', [LoginController::class, 'login']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('admin', [HomeController::class, 'admin']);
Route::get('pegawai', [HomeController::class, 'pegawai']);

Route::get('admin/data/user', [UserController::class, 'index']);
Route::get('admin/data/user/create', [UserController::class, 'tambah']);
Route::post('admin/data/user/create', [UserController::class, 'simpan']);
Route::get('admin/data/user/edit/{id}', [UserController::class, 'edit']);
Route::post('admin/data/user/edit/{id}', [UserController::class, 'update']);
Route::get('admin/data/user/delete/{id}', [UserController::class, 'hapus']);

Route::get('admin/data/pegawai', [PegawaiController::class, 'index']);
Route::get('admin/data/pegawai/create', [PegawaiController::class, 'tambah']);
Route::post('admin/data/pegawai/create', [PegawaiController::class, 'simpan']);
Route::get('admin/data/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('admin/data/pegawai/edit/{id}', [PegawaiController::class, 'update']);
Route::get('admin/data/pegawai/delete/{id}', [PegawaiController::class, 'hapus']);

Route::get('admin/data/pembayaran', [PembayaranController::class, 'index']);
Route::get('admin/data/pembayaran/create', [PembayaranController::class, 'tambah']);
Route::post('admin/data/pembayaran/create', [PembayaranController::class, 'simpan']);
Route::get('admin/data/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
Route::post('admin/data/pembayaran/edit/{id}', [PembayaranController::class, 'update']);
Route::get('admin/data/embayaran/delete/{id}', [PembayaranController::class, 'hapus']);

Route::get('admin/data/surattugas', [SuratTugasController::class, 'index']);
Route::get('admin/data/surattugas/create', [SuratTugasController::class, 'tambah']);
Route::post('admin/data/surattugas/create', [SuratTugasController::class, 'simpan']);
Route::get('admin/data/surattugas/edit/{id}', [SuratTugasController::class, 'edit']);
Route::post('admin/data/surattugas/edit/{id}', [SuratTugasController::class, 'update']);
Route::get('admin/data/surattugas/delete/{id}', [SuratTugasController::class, 'hapus']);

Route::get('admin/data/sppd', [SppdController::class, 'index']);
Route::get('admin/data/sppd/create', [SppdController::class, 'tambah']);
Route::post('admin/data/sppd/create', [SppdController::class, 'simpan']);
Route::get('admin/data/sppd/edit/{id}', [SppdController::class, 'edit']);
Route::post('admin/data/sppd/edit/{id}', [SppdController::class, 'update']);
Route::get('admin/data/sppd/delete/{id}', [SppdController::class, 'hapus']);
