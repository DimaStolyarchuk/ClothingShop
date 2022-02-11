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
Route::get('/admin_home_form', 'Admin\HomeController@home_form')->name('home_form');
Route::post('/save_home', 'Admin\HomeController@save_home')->name('save_home');
Route::get('/home_edit/{id}', 'Admin\HomeController@edit_home')->name('edit_home');
Route::get('/home_delete/{id}', 'Admin\HomeController@delete_home')->name('delete_home');



Route::get('/admin_about', 'Admin\AboutController@about')->name('admin_about');
Route::get('/admin_news', 'Admin\NewsController@news')->name('admin_news');
Route::get('/admin_contact', 'Admin\ContactController@contact')->name('admin_contact');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
