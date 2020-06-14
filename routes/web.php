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



// Auth Routes...
Route::get('/login', function(){
    return abort('404');
});
Route::get('mattama', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('mattama', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Registration Routes...
// Route::get('admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
// Route::get('admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');

// Auth::routes();

