<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminConroller;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CoachController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DegreeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SuggestedController;
use App\Http\Controllers\Admin\AdvertisingController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix(LaravelLocalization::setLocale())->group(function(){

    Route::prefix('admin')->name('admin.')->middleware('auth', 'admin', 'verified')->group(function() {
        Route::get('/', [AdminConroller::class, 'index'])->name('index');
        Route::resource('suggesteds', SuggestedController::class);
        Route::resource('students', StudentController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('news', NewsController::class);
        Route::resource('degrees', DegreeController::class);

        Route::get('courses/trash', [CourseController::class, 'trash'])->name('courses.trash');
        Route::get('courses/restore/{id}', [CourseController::class, 'restore'])->name('courses.restore');
        Route::get('courses/forcedelete/{id}', [CourseController::class, 'forcedelete'])->name('courses.forcedelete');
        Route::resource('courses', CourseController::class);
        Route::resource('coaches', CoachController::class);
        Route::resource('advertsings', AdvertisingController::class);
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    });


    Auth::routes(['verify' => true]);

    Route::get('/', [SiteController::class, 'index'])->name('home');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
    Route::get('/articles', [SiteController::class, 'articles'])->name('articles');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::get('/courses', [SiteController::class, 'courses'])->name('courses');
    Route::get('/suggest', [SiteController::class, 'suggest'])->name('suggest');



});
