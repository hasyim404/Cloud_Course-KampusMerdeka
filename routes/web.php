<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Landingpage Routes
Route::get('/', function () {
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/course', function () {
    return view('landingpage.course');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::put('/my-profile', [ProfileController::class, 'updatePassword'])->name('update-password');
Route::resource('my-profile', ProfileController::class);




// Admin Routes
Route::prefix('/admin')->middleware(['auth', 'role:Admin'])->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/users', KelolaUserController::class);
    Route::get('get-users-excel', [KelolaUserController::class, 'exportExcel']);
    Route::resource('/course', CourseController::class);
    Route::resource('/feedback', FeedbackController::class);
    Route::get('get-feedback-pdf', [FeedbackController::class, 'generatePDF']);     
});

Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
