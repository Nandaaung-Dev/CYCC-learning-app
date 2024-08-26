<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return phpinfo();
    return view('home');
})->name('home');

Route::get('/all-courses', [CourseController::class, 'list'])->middleware('auth.custom');
Route::get('/courses/{id}/video/{videoId}', [CourseController::class, 'show'])->name('course.show')->middleware('auth.custom');
Route::get('/admin', [CourseController::class, 'create'])->name('course.create')->middleware('auth.custom');
Route::post('/course-store', [CourseController::class, 'store'])->name('course.store')->middleware('auth.custom');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy')->middleware('auth.custom');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/profile', [LoginController::class, 'profile'])->name('profile');
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
