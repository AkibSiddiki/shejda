<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::middleware('web')->name('web.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


// admin routes - start
Route::prefix('users-mG40sI')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('panel-mG40sI')->middleware('auth')->name('panel.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('/users/account/edit', [App\Http\Controllers\UserController::class, 'edit_account'])->name('account.edit');
    Route::post('/users/account/edit', [App\Http\Controllers\UserController::class, 'update_account'])->name('account.update');
});
// admin routes - end
