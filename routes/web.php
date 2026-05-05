<?php

use App\Http\Controllers\BedController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DormController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Admin\GuestController as AdminGuestController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;


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
    Route::resource('staff', AdminStaffController::class);
    Route::resource('guests', AdminGuestController::class)->only(['index', 'show', 'destroy']);
    Route::resource('bookings', AdminBookingController::class)->only(['index', 'show', 'update', 'destroy']);
});

// Guest Routes
Route::middleware(['auth', 'role:guest'])->prefix('guest')->name('guest.')->group(function () {
    Route::get('/profile/{guest}', [GuestController::class, 'edit'])->name('edit');
    Route::patch('/profile/{guest}', [GuestController::class, 'update'])->name('update');
    Route::get('/view/{guest}', [GuestController::class, 'show'])->name('show');
    Route::resource('bookings', BookingController::class)->only(['index', 'create', 'store', 'show', 'destroy']);
});

// Staff Routes
Route::middleware(['auth', 'role:staff'])->prefix('staff')->name('staff.')->group(function () {
    Route::get('/view/{staff}', [StaffController::class, 'show'])->name('show');
    Route::get('/profile/{staff}', [StaffController::class, 'edit'])->name('edit');
    Route::patch('/profile/{staff}', [StaffController::class, 'update'])->name('update');
});
