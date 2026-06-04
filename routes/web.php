<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientContoller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('patients')->name('patients.')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('index');
    Route::get('/create', [PatientController::class, 'create'])->name('create');
    Route::post('/store', [PatientController::class, 'store'])->name('store');
    Route::get('/show/{id}', [PatientController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [PatientController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PatientController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PatientController::class, 'destroy'])->name('destroy');
});

Route::prefix('doctors')->name('doctors.')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('index');
    Route::get('/create', [DoctorController::class, 'create'])->name('create');
    Route::post('/store', [DoctorController::class, 'store'])->name('store');
    Route::get('/show/{id}', [DoctorController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DoctorController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [DoctorController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
