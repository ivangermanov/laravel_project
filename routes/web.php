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

Route::resource('breeds', 'BreedsController');

// Example route with parameter
// Route::get('/greeting/{name}', 'PagesController@greeting')->name('greeting');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Handling for routes which need authentication
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', 'ProfilesController@index')->name('profile');
    Route::get('/profile/gallery', 'ProfilesController@show_gallery')->name('gallery');
    Route::get('/profile/edit', 'ProfilesController@edit')->name('edit');
});
