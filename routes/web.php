<?php

use App\Http\Controllers\Userlowongan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\NewController;
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

Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('new', function () {
    return view('new');
});
Route::post('new', [NewController::class, 'store']);
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'ceklevel:admin,user'])->group(function () {
    Route::get('dashboard', function(){
        return view('layouts.master');
    })->name('dashboard');
    
    Route::get('data', [UserController::class, 'index'])->name('user');
    Route::get('cari', [UserController::class, 'cari']);
    Route::get('alumni', [AlumniController::class, 'index'])->name('crud-alumni');
    Route::get('tambah', [AlumniController::class, 'create'])->name('tambah');
    Route::post('create', [AlumniController::class, 'store'])->name('create');
    Route::get('edit/{id}', [AlumniController::class, 'edit']);
    Route::post('update/{id}', [AlumniController::class, 'update']);
    Route::get('hapus/{id}', [AlumniController::class, 'destroy']);
    Route::get('detail/{id}', [AlumniController::class, 'show']);
    Route::get('/search', [AlumniController::class, 'cari'])->name('cari');
    Route::get('lowongan', [LowonganController::class, 'index']);
    Route::get('lowongan/tambah', [LowonganController::class, 'create']);
    Route::post('lowongan/create', [LowonganController::class, 'store'])->name('lcr');
    Route::get('lhapus/{id}', [LowonganController::class, 'destroy']);
    Route::get('ledit/{id}', [LowonganController::class, 'edit']); 
    Route::post('lupdate/{id}', [LowonganController::class, 'update']);
    Route::get('dlowongan', [Userlowongan::class, 'index']);
});


