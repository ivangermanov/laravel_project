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
Route::get('/breeds/{id}/pdf','BreedsController@export_pdf');

// Example route with parameter
// Route::get('/greeting/{name}', 'PagesController@greeting')->name('greeting');

Auth::routes();


// Handling for routes which need authentication
Route::group(['middleware' => ['auth']], function () {
    Route::get('/controlPanel', 'PagesController@controlPanel')->name('controlPanel');
    Route::get('/export_users','PagesController@export_xlsx');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'ProfilesController@index')->name('profile.profile');
    Route::get('/profile/gallery', 'ProfilesController@show_gallery')->name('profile.gallery');
    Route::get('/profile/edit', 'ProfilesController@edit')->name('profile.edit');
    Route::post('/profile/update', 'ProfilesController@update')->name('profile.update');
    Route::delete('/profile/destroy', 'ProfilesController@destroy')->name('profile.destroy');
});

Route::get('/profile/{id}', 'ProfilesController@show')->name('profile.show');