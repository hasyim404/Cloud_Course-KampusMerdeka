<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelolaUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
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


// Admin Routes
Route::resource('admin/', AdminController::class);
Route::resource('admin/dashboard', AdminController::class);
Route::resource('admin/users', KelolaUserController::class);
Route::get('get-users-excel', [KelolaUserController::class, 'exportExcel']);
Route::resource('admin/course', CourseController::class);
Route::resource('admin/feedback', FeedbackController::class);
Route::get('get-feedback-pdf', [FeedbackController::class, 'generatePDF']);
