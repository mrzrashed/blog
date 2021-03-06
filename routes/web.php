<?php

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
    return view('All.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Contact', 'HomeController@contact')->name('contact');
Route::get('/Blog/{id}', 'HomeController@blog')->name('blog');
