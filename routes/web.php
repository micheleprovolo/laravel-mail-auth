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

Route::get('/', 'MainController@index') -> name('home.index');
Route::get('/posts/show/{id}', 'MainController@postShow') -> name('post.show');
Route::get('/post/edit/{id}', 'MainController@postEdit') -> name('post.edit');
Route::post('post/edit/{id}', 'MainController@postUpdate') -> name('post.update');
Route::get('post/delete/{id}', 'MainController@postDelete') -> name('post.delete');

Route::get('/category/edit/{id}', 'MainController@categoryEdit') -> name('category.edit');
Route::post('category/update/{id}', 'MainController@categoryUpdate') -> name('category.update');
Route::get('category/delete/{id}', 'MainController@categoryDelete') -> name('category.delete');

Route::get('/category/post/{id}', 'MainController@categoryPost') -> name('category.post');
Route::post('/category/post/{id}', 'MainController@categoryPostCreate') -> name('category.post.create');