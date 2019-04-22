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



// BACKEND
// ADMIN ============================================================================================================ //
Route::group([
    'namespace'  => 'Admin',
    'prefix'     => 'admin'], function() {
    Route::get(  '/',                                 [ 'as' => 'admin.dashboard',                     'uses' => 'MainController@index'             ]);

    // POSTS
    Route::get(  '/posts',                            [ 'as' => 'admin.posts.index',                   'uses' => 'PostController@index'             ]);
    Route::get(  '/posts/create',                     [ 'as' => 'admin.posts.create',                  'uses' => 'PostController@create'            ]);
    Route::post( '/posts/store',                      [ 'as' => 'admin.posts.store',                   'uses' => 'PostController@store'             ]);
    Route::get(  '/posts/{id}/edit',                  [ 'as' => 'admin.posts.edit',                    'uses' => 'PostController@edit'              ]);
    Route::patch('/posts/{id}/update',                [ 'as' => 'admin.posts.update',                  'uses' => 'PostController@update'            ]);
    Route::get(  '/posts/{id}/delete',                [ 'as' => 'admin.posts.delete',                  'uses' => 'PostController@delete'             ]);
    Route::get(  '/posts/categories',                 [ 'as' => 'admin.posts.category',                'uses' => 'TaxonomyController@taxonomies'        ]);
    Route::get(  '/posts/categories/create',          [ 'as' => 'admin.posts.category.create',         'uses' => 'TaxonomyController@taxonomiesCreate'  ]);
    Route::post( '/posts/categories/store',           [ 'as' => 'admin.posts.category.store',          'uses' => 'TaxonomyController@taxonomiesStore'   ]);
    Route::get(  '/posts/categories/{id}/edit',       [ 'as' => 'admin.posts.category.edit',           'uses' => 'TaxonomyController@taxonomiesEdit'    ]);
    Route::patch('/posts/categories/{id}/update',     [ 'as' => 'admin.posts.category.update',         'uses' => 'TaxonomyController@taxonomiesUpdate'  ]);
    Route::get(  '/posts/categories/{id}/delete',     [ 'as' => 'admin.posts.category.delete',         'uses' => 'TaxonomyController@taxonomiesDelete'  ]);

    // NEWS
    Route::get(  '/news',                             [ 'as' => 'admin.news.index',                    'uses' => 'NewsController@index'             ]);
    Route::get(  '/news/create',                      [ 'as' => 'admin.news.create',                   'uses' => 'NewsController@create'            ]);
    Route::post( '/news/store',                       [ 'as' => 'admin.news.store',                    'uses' => 'NewsController@store'             ]);
    Route::get(  '/news/{id}/edit',                   [ 'as' => 'admin.news.edit',                     'uses' => 'NewsController@edit'              ]);
    Route::patch('/news/{id}/update',                 [ 'as' => 'admin.news.update',                   'uses' => 'NewsController@update'            ]);
    Route::get(  '/news/{id}/delete',                 [ 'as' => 'admin.news.delete',                   'uses' => 'NewsController@delete'             ]);
    Route::get(  '/news/categories',                  [ 'as' => 'admin.news.category',                 'uses' => 'TaxonomyController@taxonomies'        ]);
    Route::get(  '/news/categories/create',           [ 'as' => 'admin.news.category.create',          'uses' => 'TaxonomyController@taxonomiesCreate'  ]);
    Route::post( '/news/categories/store',            [ 'as' => 'admin.news.category.store',           'uses' => 'TaxonomyController@taxonomiesStore'   ]);
    Route::get(  '/news/categories/{id}/edit',        [ 'as' => 'admin.news.category.edit',            'uses' => 'TaxonomyController@taxonomiesEdit'    ]);
    Route::patch('/news/categories/{id}/update',      [ 'as' => 'admin.news.category.update',          'uses' => 'TaxonomyController@taxonomiesUpdate'  ]);
    Route::get(  '/news/categories/{id}/delete',      [ 'as' => 'admin.news.category.delete',          'uses' => 'TaxonomyController@taxonomiesDelete'  ]);
});


Route::get('/', 'MainController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
