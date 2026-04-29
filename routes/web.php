<?php

use App\Http\Controllers\BedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DormController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\StaffController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('dorms', DormController::class);
    Route::resource('beds', BedController::class);
    Route::resource('staff', StaffController::class);
});

// Guest Routes
Route::middleware(['auth', 'role:guest'])->prefix('guest')->name('guest.')->group(function () {
    Route::get('/profile/edit', [GuestController::class, 'edit'])->name('edit');
    Route::patch('/profile/update', [GuestController::class, 'update'])->name('update');
});
