<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VisitController;


/**
 * Rute halaman utama (home)
 * Siapapun bisa mengakses ini tanpa perlu autentikasi (middleware auth)
 */
Route::get('/', function () {
    // return view('welcome'); // Mengembalikan view 'welcome', file resources/views/welcome.blade.php
    return view('landing.home');
})->name('landing.home');

Route::get('/acupuncture', function () {
    return view('landing.acupuncture');
})->name('landing.acupuncture');

Route::get('/cupping', function () {
    return view('landing.cupping');
})->name('landing.cupping');

Route::get('/contact', function () {
    return view('landing.contact');
})->name('landing.contact');

/**
 * Rute /dashboard (bawaan Breeze) yang hanya bisa diakses oleh pengguna yang sudah
 * terautentikasi dan terverifikasi
 * Dilakukan modifikasi agar mengarahkan ke daftar pasien
 * 
 * Middleware: auth, verified -> Pengguna harus terautentikasi dan terverifikasi untuk mengakses rute ini
 * Name: dashboard -> Logika login Breeze secara hardcoded akan mencari rute dengan nama ini
 */
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return redirect()->route('patients.index');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Rute-rute dalam satu grup yang hanya bisa diakses oleh pengguna yang sudah terautentikasi
 */
Route::middleware('auth')->group(function () {
    // Profile Routes (bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Trash Routes
    Route::get('/patients/trash', [PatientController::class, 'trash'])->name('patients.trash');
    Route::put('/patients/{id}/restore', [PatientController::class, 'restore'])->name('patients.restore');
});

/**
 * Resource Routes untuk Patient
 * Disebut sebagai Route Model Binding,
 * Laravel otomatis mencari data Patient berdasarkan ID yang diberikan di URL dan memasukkannya ke dalam parameter $patient.
 * Satu baris kode ini secara otomatis membuat rute-rute CRUD (Create, Read, Update, Delete) untuk resource Patient.
 * - GET /patients -> index
 * - GET /patients/create -> create
 * - POST /patients -> store
 * - GET /patients/{patient} -> show
 * - GET /patients/{patient}/edit -> edit
 * - PUT/PATCH /patients/{patient} -> update
 * - DELETE /patients/{patient} -> destroy
 */
Route::resource('patients', PatientController::class)->middleware('auth');

/**
 * Resource Routes untuk Visit yang merupakan nested resource dari Patient
 * Artinya, setiap Visit terkait dengan satu Patient tertentu.
 * Rute-rute ini juga dilindungi oleh middleware 'auth'.
 * 
 * Arti dari scoped() dan shallow():
 * - scoped(): Mengindikasikan bahwa parameter route model binding untuk Visit hanya akan menggunakan ID Visit saja,
 *   tanpa perlu menyertakan ID Patient dalam URL untuk operasi yang melibatkan Visit.
 * - shallow(): Membuat rute-rute tertentu (show, edit, update, destroy) tidak memerlukan ID Patient dalam URL,
 *   sehingga URL menjadi lebih pendek dan lebih mudah dibaca.
 * Contoh: /visits/{visit} alih-alih /patients/{patient}/visits/{visit}
 * - GET /patients/{patient}/visits -> index
 * - GET /patients/{patient}/visits/create -> create
 * - POST /patients/{patient}/visits -> store
 * - GET /patients/{patient}/visits/{visit} -> show (karena sudah ada scoped dan shallow maka URL menjadi /visits/{visit} saja)
 * - GET /patients/{patient}/visits/{visit}/edit -> edit (karena sudah ada scoped dan shallow maka URL menjadi /visits/{visit}/edit saja)
 * - PUT/PATCH /patients/{patient}/visits/{visit} -> update (karena sudah ada scoped dan shallow maka URL menjadi /visits/{visit} saja)
 * - DELETE /patients/{patient}/visits/{visit} -> destroy (karena sudah ada scoped dan shallow maka URL menjadi /visits/{visit} saja) 
 */
Route::resource('patients.visits', VisitController::class)->middleware('auth')->scoped()->shallow();

/**
 * Rute autentikasi yang disediakan oleh Laravel Breeze
 * Ini adalah file terpisah yang mengelola rute-rute untuk login, registrasi, reset password, dll.
 */
require __DIR__ . '/auth.php';
