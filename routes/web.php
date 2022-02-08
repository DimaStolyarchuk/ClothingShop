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
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/news', 'NewsController@news')->name('news');
Route::get('/contact', 'ContactController@contact')->name('contact');

Route::get('/admin_home', 'Admin\HomeController@home')->name('admin_home');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
