<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LaporBanjirController;
use Illuminate\Support\Facades\Route;

// Halaman Publik (Form Pelaporan tetap bisa diakses tanpa login)
Route::get('/', [LaporBanjirController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporBanjirController::class, 'store'])->name('laporan.store');

// Rute Tamu (Guest) untuk Register & Login
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Rute yang Diproteksi oleh Middleware Auth (Petugas)
Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporBanjirController::class, 'index'])->name('laporan.index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Profil Petugas
    Route::get('/profil', function () {
        return view('auth.profil');
    })->name('profil');
});