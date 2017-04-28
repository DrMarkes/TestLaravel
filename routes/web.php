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

Auth::routes();

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

Route::get('/home', 'HomeController@index');
