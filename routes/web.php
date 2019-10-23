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

  // Route::domain('blog.mywebsite.com')->get('/', 'BlogController@index');

// // And for showing a post
// Route::get('/{tag}/{slug}', 'BlogController@post');
// // OR
// Route::get('/{year}/{month}/{slug}', 'BlogController@post');
Auth::routes();
Route::get('/', 'PagesController@index')->name('index');
Route::get('/ourworks', 'PagesController@ourworks');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/blog/{slug}', 'PagesController@singleblog');
Route::get('/blog/tag/{tag}', 'PagesController@blogtag');
Route::domain('blog.mywebsite.com')->get('/blog', 'PagesController@blog');
