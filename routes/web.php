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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/profile', 'ProfilesController@index')->name('profile');
Route::get('/profile/galery', 'ProfilesController@show')->name('galery');
Route::get('/profile/edit', 'ProfilesController@edit')->name('edit');

Route::resource('breeds', 'BreedsController');


// Example route with parameter
// Route::get('/greeting/{name}', 'PagesController@greeting')->name('greeting');
