<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); 
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); 
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit');
    Route::post('profile/update','Admin\ProfileController@update');
 });
 
Route::get('/', 'NewsController@index');
Route::get('/profile', 'ProfileController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

