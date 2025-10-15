<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VisitController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('patients', PatientController::class);

/**
 * Karena kunjungan (visits) selalu terkait dengan pasien tertentu,
 * kita bisa menggunakan nested resource untuk mengelola kunjungan pasien.
 */

// Route untuk menampilkan form tambah kunjungan untuk pasien tertentu
Route::get('patients/{patient}/visits/create', [VisitController::class, 'create']);

// Route untuk menyimpan kunjungan baru
Route::post('patients/{patient}/visits', [VisitController::class, 'store']);
