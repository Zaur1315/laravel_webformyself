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

Route::get('/', '\App\Http\Controllers\HomeController@index');
Route::get('/test', '\App\Http\Controllers\HomeController@test');
Route::get('/page/{slug}', '\App\Http\Controllers\PageController@show');
Route::get('/test2', '\App\Http\Controllers\Test\TestController@index');

Route::resource('admin/posts', '\App\Http\Controllers\PostController', ['parameters' => [
    'posts' => 'slug',
]]);
