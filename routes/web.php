<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\InfoPageController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectBookingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LandownerController;
use App\Http\Controllers\BuyerController;

Route::get('/', [HomeController::class, 'index'])->name('web.home')->middleware('web');
Route::get('/our-story', [HomeController::class, 'ourStory'])->name('web.ourStory')->middleware('web');
Route::get('/mission-vision', [HomeController::class, 'missionVision'])->name('web.missionVision')->middleware('web');
Route::get('/landowners', [HomeController::class, 'landowners'])->name('web.landowners')->middleware('web');
Route::get('/buyers', [HomeController::class, 'buyers'])->name('web.buyers')->middleware('web');
Route::get('/customers', [HomeController::class, 'customers'])->name('web.customers')->middleware('web');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('web.contactUs')->middleware('web');
Route::get('/news-events', [HomeController::class, 'newsList'])->name('web.news.list')->middleware('web');
Route::get('/news-event/{news}', [HomeController::class, 'newsView'])->name('web.news.view')->middleware('web');
Route::get('/projects/{type}/{p_type?}', [HomeController::class, 'projectList'])->name('web.project.list')->middleware('web');
Route::get('/project/{project}', [HomeController::class, 'projectView'])->name('web.project.view')->middleware('web');
Route::post('/project/booking/store/{project}', [ProjectBookingController::class, 'store'])->name('web.project.booking.store');
Route::get('/board-of-directors', [HomeController::class, 'boardOfDirectors'])->name('web.boardOfDirectors')->middleware('web');
Route::get('/management-team', [HomeController::class, 'managementTeam'])->name('web.managementTeam')->middleware('web');
Route::post('/message/store', [MessageController::class, 'store'])->name('web.message.store');
Route::get('/clients', [HomeController::class, 'clients'])->name('web.clients')->middleware('web');
Route::get('/jobs', [HomeController::class, 'jobList'])->name('web.job.list')->middleware('web');
Route::get('/job/{job}', [HomeController::class, 'jobView'])->name('web.job.view')->middleware('web');
Route::get('/job/apply/{job}', [HomeController::class, 'jobApply'])->name('web.job.apply')->middleware('web');
Route::post('/job/apply/store/{job}', [HomeController::class, 'jobApplyStore'])->name('web.job.apply.store');
Route::post('/landowners/store', [LandownerController::class, 'store'])->name('web.landowners.store');
Route::post('/buyers/store', [BuyerController::class, 'store'])->name('web.buyers.store');

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

    //news and events
    Route::get('/news-events', [NewsEventController::class, 'index'])->name('newsEvent.index');
    Route::get('/news-event/create', [NewsEventController::class, 'create'])->name('newsEvent.create');
    Route::post('/news-event/store', [NewsEventController::class, 'store'])->name('newsEvent.store');
    Route::get('/news-event/edit/{newsEvent}', [NewsEventController::class, 'edit'])->name('newsEvent.edit');
    Route::post('/news-event/update/{newsEvent}', [NewsEventController::class, 'update'])->name('newsEvent.update');
    Route::get('/news-event/status/{newsEvent}', [NewsEventController::class, 'statusToggle'])->name('newsEvent.status');
    Route::delete('/news-event/delete/{newsEvent}', [NewsEventController::class, 'delete'])->name('newsEvent.destroy');

    //projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/project/edit/{project}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/update/{project}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/delete/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::get('/project/status/{project}', [ProjectController::class, 'statusToggle'])->name('project.status');
    Route::get('/project/photos/create/{project}', [ProjectController::class, 'createPhoto'])->name('project.photos.create');
    Route::post('/project/photos/store/{project}', [ProjectController::class, 'storePhotos'])->name('project.photos.store');
    Route::delete('/project/photos/delete/{photo}', [ProjectController::class, 'destroyPhoto'])->name('project.photos.destroy');
    Route::get('/project/bookings/{project}', [ProjectController::class, 'bookings'])->name('project.bookings');
    Route::get('/project/booking/{projectBooking}', [ProjectController::class, 'bookingSeen'])->name('project.seen');

    //jobs
    Route::get('/jobs', [JobController::class, 'index'])->name('job.index');
    Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
    Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
    Route::get('/job/edit/{job}', [JobController::class, 'edit'])->name('job.edit');
    Route::post('/job/update/{job}', [JobController::class, 'update'])->name('job.update');
    Route::delete('/job/delete/{job}', [JobController::class, 'destroy'])->name('job.destroy');
    Route::get('/job/status/{job}', [JobController::class, 'statusToggle'])->name('job.status');
    Route::get('/job/applicants/{job}', [JobController::class, 'applicants'])->name('job.applicants');
    Route::get('/job/applicant/seen/{applicant}', [JobController::class, 'applicantSeen'])->name('applicant.seen');

    //Team
    Route::get('/team', [TeamController::class, 'index'])->name('team.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/edit/{team}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/update/{team}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/team/delete/{team}', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::get('/team/status/{team}', [TeamController::class, 'statusToggle'])->name('team.status');

    //Contact list
    Route::get('/messages', [MessageController::class, 'index'])->name('message.index');
    Route::get('/message/seen/{message}', [MessageController::class, 'messageSeen'])->name('message.seen');

    //Client
    Route::get('/clients', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/client/edit/{client}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('/client/update/{client}', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/status/{client}', [ClientController::class, 'statusToggle'])->name('client.status');
    Route::delete('/client/delete/{client}', [ClientController::class, 'destroy'])->name('client.destroy');


});
// admin routes - end
