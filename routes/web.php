<?php

use App\Models\Post;
use App\Models\Language;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HelpUsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FinancingController;
use App\Http\Controllers\AboutBoardController;
use App\Http\Controllers\NavigationsController;
use App\Http\Controllers\AboutHistoryController;
use App\Http\Controllers\AboutMissionVisionController;
use App\Http\Controllers\DonationController;


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



    // These routes are reserved for the frontend navigation of the follwing pages to be made
    // Kindly add the proper Controller Name class the Controller Name class given are just a filler
    // Don't change the route name bevause these are the reserved routename that is present on the database
    Route::get('/news/blog/{lang}/{id}', [NewsController::class, 'blog'])->name('news.blog'); //News
    // Route::get('/help-us/{lang}', [HelpController::class, 'index'])->name('helpus'); //Help Us
    Route::get('/financing/{lang}', [FinancingpController::class, 'index'])->name('financing'); //News
    Route::get('/operation/{lang}', [FinancingController::class, 'index'])->name('operation'); //News

    //News Comments
    Route::post('/comment/{id}', [NewsController::class, 'comment'])->name('news.blog.comment');
    Route::post('/reply/{post_id}/{comment_id}', [NewsController::class, 'reply'])->name('news.blog.reply');


    Route::get('/homepage/{lang}', [App\Http\Controllers\HomePageController::class, 'index'])->name('homepage'); //Home
    Route::get('/about-history/{lang}', [App\Http\Controllers\AboutHistoryController::class, 'index'])->name('history'); //About History
    Route::get('/project/{lang}', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects'); //About Mission Vision
    Route::get('/news/{lang}', [NewsController::class, 'frontend'])->name('news'); //News
    Route::get('/help-us/{lang}', [App\Http\Controllers\HelpUsController::class, 'index'])->name('helpus');
    Route::get('/contact-us/{lang}', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus'); //Contact Us
    Route::get('/about-mission-vision/{lang}', [App\Http\Controllers\AboutMissionVisionController::class, 'index'])->name('missionvision'); //About Mission Vision
    Route::get('/about-board/{lang}', [App\Http\Controllers\AboutBoardController::class, 'index'])->name('board'); //About Mission Vision
    Route::get('/financing/{lang}', [App\Http\Controllers\FinancingController::class, 'index'])->name('financing');
    Route::get('/gallery/{lang}', [App\Http\Controllers\GalleryController::class, 'index'])->name('gellery'); //Gallery

    Route::get('/', function () {
        return redirect()->route('homepage', ['lang' => 1]);
    })->name('welcome');


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.home');

    //dahboard
    Route::middleware('auth')->group(function () {


        // Route::get('/dashboard', function () {
        //   $news = Post::where('language_id','=',1)->get();
        //   return view('backend.dashboard_pages.home', compact('news', 'daily'));
        // })->name('dashboard.home');



        Route::get('/about', function () {
            return view('backend.dashboard_pages.about');
        })->name('dashboard.about');

        Route::controller(HomePageController::class)->group(function () {
            Route::get('/home-page/show/{lang}', 'show')->name('homepage.show');
            Route::get('/home-page/create/{sec}/{lang}', 'create')->name('homepage.create');
            Route::post('/home-page/store/{sec}/{lang}', 'store')->name('homepage.store');
            Route::get('/home-page/edit/{sec}/{lang}/{id}', 'edit')->name('homepage.edit');
            Route::put('/home-page/udpate/{sec}/{lang}/{id}', 'update')->name('homepage.udpate');
            Route::get('home-page/edit-card/{lang}/{id}', 'editSec2')->name('homepage.sec2.edit');
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

        Route::controller(AboutMissionVisionController::class)->group(function () {
            Route::get('/about-mission-vision/show/{lang_id}', 'show')->name('about_mission_vision.show');
            Route::get('/about-mission-vision/create/{lang_id}', 'create')->name('about_mission_vision.create');
            Route::get('/about-mission-vision/edit/{lang_id}', 'edit')->name('about_mission_vision.edit');
            Route::put('/about-mission-vision/update/{lang_id}', 'update')->name('about_mission_vision.update');
            Route::post('/about-mission-vision/store', 'store')->name('about_mission_vision.store');
        });

        Route::controller(AboutBoardController::class)->group(function () {
            Route::get('/about-board/show/{lang_id}', 'show')->name('about_board.show');
            Route::get('/about-board/create/{lang_id}', 'create')->name('about_board.create');
            Route::get('/about-board/edit/{lang_id}', 'edit')->name('about_board.edit');
            Route::put('/about-board/update/{lang_id}', 'update')->name('about_board.update');
            Route::post('/about-board/store', 'store')->name('about_board.store');
        });

        Route::controller(ProjectController::class)->group(function () {
            Route::get('/project/show/{lang_id}', 'show')->name('project.show');
            Route::get('/project/create/{lang_id}', 'create')->name('project.create');
            Route::get('/project/edit/{lang_id}', 'edit')->name('project.edit');
            Route::put('/project/update/{lang_id}', 'update')->name('project.update');
            Route::post('/project/store', 'store')->name('project.store');
        });


        // Navigations
        Route::controller(NavigationsController::class)->prefix('navigations')->group(function(){
            Route::get('/index', 'index')->name('navigation.index');
            Route::get('/create/{id}/{lang}/{type}', 'create')->name('navigation.create');
            Route::post('/store/{mainnav}/{subnav}/{type}', 'translate')->name('navigation.translate');
            Route::get('/show/{id}', 'show')->name('navigation.show');
            Route::get('/edit/{id}/{type}', 'edit')->name('navigation.edit');
            Route::put('/update/{id}/{type}', 'update')->name('navigation.udpate');
        });

        // News
        Route::controller(NewsController::class)->prefix('news')->group(function(){
          Route::get('/index/{lang}', 'index')->name('news.index');
          Route::get('/crate/{lang}', 'create')->name('news.create');
          Route::get('/translate/{lang}/{id}', 'translate')->name('news.translate');
          Route::post('/store/{lang}/{id}', 'store')->name('news.store');
          Route::get('/edit/{lang}/{id}', 'edit')->name('news.edit');
          Route::put('/update/{lang}/{id}', 'update')->name('news.update');
          Route::delete('/delete/{lang}/{id}', 'delete')->name('news.delete');
          Route::get('/show/{lang}/{id}', 'show')->name('news.show');

        });
        Route::controller(HelpUsController::class)->group(function () {
            Route::get('/help-us/show/{lang_id}', 'show')->name('help-us.show');
            Route::get('/help-us/create/{lang_id}', 'create')->name('help-us.create');
            Route::post('/help-us/store', 'store')->name('help-us.store');
            Route::get('/help-us/edit/{lang_id}', 'edit')->name('help-us.edit');
            Route::put('/help-us/update/{lang_id}', 'update')->name('help-us.update');
        });

        Route::controller(FinancingController::class)->group(function () {
            Route::get('/financing/show/{lang_id}', 'show')->name('financing.show');
            Route::get('/financing/create/{lang_id}', 'create')->name('financing.create');
            Route::post('/financing/store', 'store')->name('financing.store');
            // Route::get('/financing/edit/{lang_id}', 'edit')->name('financing.edit');
            // Route::put('/financing/update/{lang_id}', 'update')->name('financing.update');
        });

        // Gallery
        Route::controller(GalleryController::class)->group(function () {
          Route::get('/gallery', 'show')->name('gallery.show');
          Route::post('/gallery/store', 'store')->name('gallery.store');
          Route::delete('/gallery/delete/{id}', 'delete')->name('gallery.delete');
        });

        // Language
        Route::controller(LanguageController::class)->group(function () {
          Route::get('/languages', 'index')->name('lang.index');
          Route::post('/languages/store', 'store')->name('lang.store');
          Route::delete('/languages/delete/{id}', 'delete')->name('lang.delete');
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





    Route::middleware('auth')->group(function () {
    // Route::view('about', 'backend.dashboard_pages.about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    });


    // Donation
    Route::post('donation', [App\Http\Controllers\DonationController::class, 'stripePost']);
    Route::get('/success/{lang}', [App\Http\Controllers\DonationController::class, 'success'])->name('donation.success');

    Route::get('/cancel', function () {return redirect()->route('frontend.home', ['lang' => 1]);})->name('welcome');


    Route::get('/success/show/{lang}', [App\Http\Controllers\DonationController::class, 'show'])->name('success.show');
    Route::get('/success/edit/{id}', [App\Http\Controllers\DonationController::class, 'edit'])->name('success.edit');
    Route::put('/success/{id}', [App\Http\Controllers\DonationController::class, 'update'])->name('success.update');


    // Privacy Policy
    Route::get('/privacy-policy', function () {
        return view('frontend.landing_pages.privacy-policy');
    })->name('frontend.privacy-policy');

