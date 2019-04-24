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

// FRONTEND
// NEWS ============================================================================================================= //
Route::group([
    'prefix' => 'news',
    /*'middleware' => 'filter.view.counts'*/], function() {
    Route::get('/',                             [ 'as' => 'news',                         'uses' => 'NewsController@index' ]);
    Route::get('/{route}',                      [ 'as' => 'news.url',                     'uses' => 'NewsController@getURL' ])->where('route', '(.+)');
});

// PROFILES ========================================================================================================= //
// Route::get('/users',                          [ 'as' => 'users.list',                   'uses' => 'ProfileController@index' ]);
// Route::get('/{route}',                        [ 'as' => 'user.profile',                 'uses' => 'ProfileController@profile' ]);
// Route::get('/{route}/edit',                   [ 'as' => 'user.profile.edit',            'uses' => 'ProfileController@edit' ]);
// Route::get('/{route}/edit/route',             [ 'as' => 'user.profile.edit.url',        'uses' => 'ProfileController@editUrl' ]);






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
    Route::get(  '/news/categories/create',           [ 'as' => 'admin.news.category.create',          'uses' => 'TaxonomyController@create'  ]);
    Route::post( '/news/categories/store',            [ 'as' => 'admin.news.category.store',           'uses' => 'TaxonomyController@store'   ]);
    Route::get(  '/news/categories/{id}/edit',        [ 'as' => 'admin.news.category.edit',            'uses' => 'TaxonomyController@edit'    ]);
    Route::patch('/news/categories/{id}/update',      [ 'as' => 'admin.news.category.update',          'uses' => 'TaxonomyController@update'  ]);
    Route::get(  '/news/categories/{id}/delete',      [ 'as' => 'admin.news.category.delete',          'uses' => 'TaxonomyController@delete'  ]);
});


Route::get('/', 'MainController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
