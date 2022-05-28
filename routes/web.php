<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactusController;

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


        Route::controller(ContactusController::class)->group(function () {
            Route::get('/contact-us/', 'index')->name('contactus.index');
            Route::get('/contact-us/show/{lang}', 'show')->name('contactus.show');
            Route::get('/contact-us/edit/{lang}', 'edit')->name('contactus.edit');
            Route::get('/contact-us/create/{lang}', 'create')->name('contactus.create');
            Route::post('/contact-us/store/{lang}', 'store')->name('contactus.store');
            Route::put('/contact-us/update/{lang}/{reg_id}/{gen_id}', 'update')->name('contactus.update');
        });

        Route::get('/edit/contact-us', function () {
            return view('backend.dashboard_pages.edit-contact-us');
        })->name('dashboard.edit.contact');
      
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
