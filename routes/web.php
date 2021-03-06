<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AboutHistoryController;
use App\Http\Controllers\ActiveLanguageController;

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

    
    Route::get('/homepage/{lang}', [App\Http\Controllers\HomePageController::class, 'index'])->name('frontend.home'); //Home
    Route::get('/contact-us/{lang}', [App\Http\Controllers\ContactusController::class, 'index'])->name('frontend.contact'); //Contact Us
    Route::get('/about-history/{lang}', [App\Http\Controllers\AboutHistoryController::class, 'index'])->name('frontend.about-history'); //About History

    Route::get('/', function () {
        return redirect()->route('frontend.home', ['lang' => 1]);
    })->name('welcome');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //dahboard
    Route::middleware('auth')->group(function () {

        Route::get('/dashboard', function () {
            return view('backend.dashboard_pages.home');
        })->name('dashboard.home');


        Route::get('/about', function () {
            return view('backend.dashboard_pages.about');
        })->name('dashboard.about');

        Route::controller(HomePageController::class)->group(function () {
            Route::get('/home-page/show/{lang}', 'show')->name('homepage.show');
            Route::get('/home-page/create/{sec}/{lang}', 'create')->name('homepage.create');
            Route::post('/home-page/store/{sec}/{lang}', 'store')->name('homepage.store');
            Route::get('/home-page/edit/{sec}/{lang}/{id}', 'edit')->name('homepage.edit');
            Route::put('/home-page/udpate/{sec}/{lang}/{id}', 'update')->name('homepage.udpate');
        });

        Route::controller(ContactusController::class)->group(function () {
            Route::get('/contact-us/show/{lang}', 'show')->name('contactus.show');
            Route::get('/contact-us/edit/{lang}', 'edit')->name('contactus.edit');
            Route::get('/contact-us/create/{lang}', 'create')->name('contactus.create');
            Route::post('/contact-us/store/{lang}', 'store')->name('contactus.store');
            Route::put('/contact-us/update/{lang}/{reg_id}/{gen_id}', 'update')->name('contactus.update');
        });

        Route::controller(AboutHistoryController::class)->group(function () {
            Route::get('/about-history/show/{lang_id}', 'show')->name('about_history.show');
            Route::get('/about-history/create/{lang_id}', 'create')->name('about_history.create');
            Route::get('/about-history/edit/{lang_id}', 'edit')->name('about_history.edit');
            Route::put('/about-history/update/{lang_id}', 'update')->name('about_history.update');
            Route::post('/about-history/store', 'store')->name('about_history.store');
        });

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


    ////////////////////////////////////////////////////////////////////////////////////////////////////////


    Route::middleware('auth')->group(function () {
    // Route::view('about', 'backend.dashboard_pages.about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    });
