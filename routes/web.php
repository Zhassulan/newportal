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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfilesController@show')->name('profile');
Route::post('/profile/update', 'ProfilesController@update')->name('update');

Route::get('/regions', 'RegionsController@show')->name('regions');
Route::get('/regions/new', 'RegionsController@new')->name('newregion');
Route::get('/regions/{id}', 'RegionsController@edit')->name('editregion');
Route::post('/regions/save/{id?}', 'RegionsController@save')->name('saveregion');
Route::get('/regions/del/{id}', 'RegionsController@del')->name('delregion');
