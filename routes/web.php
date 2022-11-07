<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('daftar-pelanggan', [App\Http\Controllers\DashboardController::class, 'daftar_pelanggan']);
    Route::get('verification-request', [App\Http\Controllers\DashboardController::class, 'verification_request']);
    Route::get('verification-order', [App\Http\Controllers\DashboardController::class, 'verification_order']);
    Route::get('laporan-surveyor', [App\Http\Controllers\DashboardController::class, 'laporan_surveyor']);
    Route::get('data-master', [App\Http\Controllers\DashboardController::class, 'data_master']);
    Route::get('pengaturan-akun', [App\Http\Controllers\DashboardController::class, 'pengaturan_akun']);
});

Route::get('logout', [App\Http\Controllers\AuthenticationController::class, 'logout']);