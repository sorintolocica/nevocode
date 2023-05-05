<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/login', 'PagesController@login')->name('pages.login');
    Route::get('/register', 'PagesController@register')->name('pages.register');
    Route::get('/courses', 'PagesController@courses')->name('pages.courses');
    Route::get('/study', 'PagesController@study')->name('pages.study');
    Route::get('/login', 'AuthController@showLoginForm')->name('login');
    Route::post('/login', 'AuthController@login');
    Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
    Route::post('/register', 'AuthController@register');
    Route::get('/dashboard', 'PagesController@dashboard')->name('pages.dashboard');
    Route::get('/add-course', 'PagesController@add_course')->name('pages.add-course');
    Route::get('/view-users', 'PagesController@view_users')->name('pages.view-users');
    Route::get('/add-news', 'NewsController@showAddForm')->name('add-news');
    Route::post('/add-news', 'NewsController@addNews')->name('add-news-submit');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
