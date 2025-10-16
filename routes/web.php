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
// UPDATE: Commented out to use resource route with scoped and shallow methods
// Route::get('patients/{patient}/visits/create', [VisitController::class, 'create']);

// Route untuk menyimpan kunjungan baru
// UPDATE: Commented out to use resource route with scoped and shallow methods
// Route::post('patients/{patient}/visits', [VisitController::class, 'store']);

/**
 * shallow() digunakan agar route untuk edit, update, dan delete kunjungan
 * tidak perlu menyertakan ID pasien, cukup ID kunjungan saja.
 * Ini membuat URL lebih bersih dan mudah diingat.
 * 
 * scoped() digunakan agar route untuk create dan store tetap menyertakan ID pasien.
 * 
 * Perbedaan patients dengan patients.visits adalah:
 * - patients: mengacu pada resource pasien secara umum.
 * - patients.visits: mengacu pada resource kunjungan yang terkait dengan pasien tertentu.
 */
Route::resource('patients.visits', VisitController::class)->scoped()->shallow();
