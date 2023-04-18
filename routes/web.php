<?php

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

Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');
Route::get('/create', '\App\Http\Controllers\HomeController@create')->name('posts.create');
Route::post('/store', '\App\Http\Controllers\HomeController@store')->name('posts.store');

Route::get('/page/about', '\App\Http\Controllers\PageController@show')->name('page.about');

//Route::get('/send', '\App\Http\Controllers\ContactController@send');

Route::match(['get','post'], '/send', '\App\Http\Controllers\ContactController@send');

Route::group(['middleware' => 'guest'], function (){
    Route::get('register', '\App\Http\Controllers\UserController@create')->name('register.create');
    Route::post('register', '\App\Http\Controllers\UserController@store')->name('register.store');
    Route::get('/login', '\App\Http\Controllers\UserController@loginForm')->name('login.create');
    Route::post('/login', '\App\Http\Controllers\UserController@login')->name('login');
});



Route::group(['middleware' => 'admin', 'prefix' => 'admin'],function (){
    Route::get('/', 'App\Http\Controllers\UserController@admin');
});
Route::get('/logout', '\App\Http\Controllers\UserController@logout')->name('logout')->middleware('auth');
//Route::get('/admin', '\App\Http\Controllers\UserController@admin')->middleware('admin');
