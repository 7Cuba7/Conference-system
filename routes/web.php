<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
*/

// Public routes - accessible to everyone
Route::get('/', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.list');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin only routes - require authentication and admin role
// IMPORTANT: Specific routes MUST come BEFORE wildcard routes
Route::middleware(['admin'])->group(function () {
    Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
    Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
    Route::get('/conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
    Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])->name('conferences.update');
    Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
});

// Public show route - MUST come after specific routes like /conferences/create
Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])->name('conferences.show');
