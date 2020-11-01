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
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logoutShow');
Route::get('/', [HomepageController::class, 'index']);
Route::get('/user', [UserDashboardController::class, 'index']);

Route::resource('survey', SurveyController::class);

Route::prefix('admin')->group(function() {
    Route::get('/', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'App\Http\Controllers\Auth\AdminLoginController@logoutShow');
    Route::post('/logout', 'App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.logout');  

    Route::prefix('dashboard')->group(function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/survey/{id}', [AdminDashboardController::class, 'surveyApproval'])->name('admin.surveyShow');
        Route::post('/survey/{id}', [AdminDashboardController::class, 'surveyRequest'])->name('admin.survey.submit');
    });
    
}); 
