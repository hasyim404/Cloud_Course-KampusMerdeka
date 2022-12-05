<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LPCourseController;
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

// Landingpage Routes
Route::resource('/', LandingpageController::class);
Route::resource('/home', LandingpageController::class);
Route::resource('/daftar-course', LPCourseController::class);
Route::get('/about', function () {
    return view('landingpage.about');
});
Route::put('/my-profile', [ProfileController::class, 'updatePassword'])->name('update-password');
Route::resource('my-profile', ProfileController::class)->middleware('auth');


// Admin Routes
Route::prefix('/admin')->middleware(['auth', 'role:Admin'])->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('/dashboard', AdminController::class);
    Route::resource('/users', KelolaUserController::class);
    Route::put('/users/{id}/update-password', [KelolaUserController::class, 'updatePasswordAdmin']);
    Route::get('get-users-excel', [KelolaUserController::class, 'exportExcel']);
    Route::resource('/course', CourseController::class);
    Route::resource('/feedback', FeedbackController::class);
    Route::get('get-feedback-pdf', [FeedbackController::class, 'generatePDF']);  
    Route::resource('/testimoni', TestimoniController::class);
    Route::get('get-testimoni-pdf', [TestimoniController::class, 'generatePDF']);  
    Route::get('get-testimoni-excel', [TestimoniController::class, 'exportExcel']);
});

// Register & Login Page
Auth::routes();


// Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
