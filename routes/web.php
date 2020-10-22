<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use resource;
use Auth;

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
Route::get('/', [HomepageController::class, 'index']);
Route::get('/user', [UserDashboardController::class, 'index']);

Route::resource('survey', SurveyController::class);

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
}); 

