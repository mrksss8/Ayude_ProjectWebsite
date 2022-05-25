<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


    Route::get('/', function () {
        return view('frontend.landing_pages.index');
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //dahboard
    Route::middleware('auth')->group(function () {

        Route::get('/dashboard', function () {
            return view('backend.dashboard_pages.home');
        })->name('dashboard.home');


        Route::get('/about', function () {
            return view('backend.dashboard_pages.about');
        })->name('dashboard.about');

        Route::get('/board-member', function () {
            return view('backend.dashboard_pages.board');
        })->name('dashboard.board');

        Route::get('/show-board-member', function () {
            return view('backend.dashboard_pages.show_board');
        })->name('dashboard.show_board');


        Route::get('/history-back', function () {
            return view('backend.dashboard_pages.history');
        })->name('dashboard.history');

        Route::get('/history-edit', function () {
            return view('backend.dashboard_pages.history_edit');
        })->name('dashboard.history_edit');

        Route::get('/mission-and-vision', function () {
            return view('backend.dashboard_pages.mission-and-vision');
        })->name('dashboard.mission-and-vision');

        Route::get('/mission-and-vision/edit', function () {
            return view('backend.dashboard_pages.mission-and-vision_edit');
        })->name('dashboard.mission-and-vision.edit');

     });

    // Landing Page Navigator
    Route::get('/{page}', [App\Http\Controllers\NavController::class, 'navigate'])->name('navigate');


    ////////////////////////////////////////////////////////////////////////////////////////////////////////


    Route::middleware('auth')->group(function () {
    // Route::view('about', 'backend.dashboard_pages.about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
