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

Route::get('/', [
    'as'   => 'home',
    'uses' => 'Admin\IndexController@show',
]);

Route::get('/article/{page?}', [
    'uses' => 'Admin\Core@getArticle',
    'as'   => 'article',
])->where('page', '[0-9]+');

Route::get('/articles', [
    'uses' => 'Admin\Core@getArticles',
    'as'   => 'articles',
]);

Route::get('/contact', [
    'uses' => 'Admin\ContactController@show',
    'as'   => 'contact',
]);

Route::post('/contact', [
    'uses' => 'Admin\ContactController@store',
    'as'   => 'store_contact',
]);

Route::get('/show', [
    'as'   => 'show',
    'uses' => 'Admin\AboutController@show',
]);

Route::get('/about', [
    'uses' => 'AboutController@show',
    'as'   => 'about',
]);

Auth::routes();

/*Route::get('/login', [
'uses' => 'Auth\MyAuthController@showLogin',
'as'   => 'login',
]);
Route::post('/login', ['uses' => 'Auth\MyAuthController@authenticate']);*/

Route::get('/home', 'HomeController@index');

Route::group([
    'prefix'     => 'admin',
    'middleware' => 'auth',
], function () {

    Route::get('/', [
        'uses' => 'Admin\AdminController@show',
        'as'   => 'admin_index',
    ]);

    Route::get('/add/post', [
        'uses' => 'Admin\AdminPostController@show',
        'as'   => 'admin_add_post',
    ]);

    Route::post('/add/post', [
        'uses' => 'Admin\AdminPostController@create',
        'as'   => 'admin_add_post_p',
    ]);

    Route::get('/update/post/{article}', [
        'uses' => 'Admin\AdminUpdatePostController@show',
        'as'   => 'admin_update_post',
    ]);

    Route::post('/update/post', [
        'uses' => 'Admin\AdminUpdatePostController@create',
        'as'   => 'admin_update_post_p',
    ]);
});
