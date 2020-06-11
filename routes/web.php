<?php

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

Route::group(['middleware' => 'admin'], function () {
    Route::resource('/dashboard', 'DashboardController');
    Route::resource('/admin', 'AdminController');
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/video', 'VideoController');
    Route::resource('/team', 'TeamController');
});

Route::get('/', 'HomeController@index');
Route::get('/show/artikel/{slug}', 'HomeController@show_artikel');
Route::get('/show/video/{slug}', 'HomeController@show_video');
Route::post('/provinsi', 'HomeController@provinsi');




Auth::routes();

