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

Route::get('/', 'Pages\HomeController@index');
Route::get('/posts', 'Pages\PostController@index');
Route::get('/post/{slug}', 'Pages\PostController@show');
Route::get('/category/{slug}','Pages\CategoryController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
