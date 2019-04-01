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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');




// BACKEND
// ================================================================================================================== //
Route::group([
    'namespace'  => 'Admin',
    'prefix'     => 'admin'], function() {
    Route::get('/',                             [ 'as' => 'dashboard',                         'uses' => 'AdminController@index' ]);
    Route::get('test',                             [ 'as' => 'dashboards',                         'uses' => 'AdminController@index' ]);

    //NEWS
    Route::get('news',                             [ 'as' => 'news',                         'uses' => 'AdminController@index' ]);
});