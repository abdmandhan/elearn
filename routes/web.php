<?php

use App\Http\Controllers\Auth\TeacherController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('auth.login');
})->name('/');

Route::get('/login/teacher', function () {
    return view('auth.login-teacher');
})->name('login.teacher');

Route::post('/login/teacher', [TeacherController::class, 'login'])->name('login.teacher');

Route::get('/login/student', function () {
    return view('auth.login-student');
})->name('login.student');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
});

Route::group(['middleware' => ['auth:web-teacher']], function () {
    Route::get('dashboard/teacher', [DashboardController::class, 'index']);
});
