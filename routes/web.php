<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\InfoPageController;


Route::get('/', [HomeController::class, 'index'])->name('web.home')->middleware('web');
Route::get('/our-story', [HomeController::class, 'ourStory'])->name('web.ourStory')->middleware('web');

// admin routes - start
Route::prefix('users-mG40sI')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('panel-mG40sI')->middleware('auth')->name('panel.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/account/edit', [UserController::class, 'edit_account'])->name('account.edit');
    Route::post('/users/account/edit', [UserController::class, 'update_account'])->name('account.update');

    //slider
    Route::get('/sliders', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/edit/{slider}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/update/{slider}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/delete/{slider}', [SliderController::class, 'delete'])->name('slider.destroy');
    Route::get('/slider/status/{slider}', [SliderController::class, 'statusToggle'])->name('slider.status');


    //infoPage
    Route::get('/infoPages', [InfoPageController::class, 'index'])->name('infoPage.index');
    Route::get('/infoPage/edit/{infoPage}', [InfoPageController::class, 'edit'])->name('infoPage.edit');
    Route::post('/infoPage/update/{infoPage}', [InfoPageController::class, 'update'])->name('infoPage.update');
    Route::get('/infoPage/status/{infoPage}', [InfoPageController::class, 'statusToggle'])->name('infoPage.status');
});
// admin routes - end
