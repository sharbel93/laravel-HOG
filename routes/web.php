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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@getAbout');
Route::get('/sermon', 'PagesController@getSermon');
Route::get('/event', 'PagesController@getEvent');
Route::get('/media', 'PagesController@getMedia');
Route::get('/ministries', 'PagesController@getMinistries');
Route::get('/blog', 'PagesController@getBlog');
Route::get('/staff', 'PagesController@getStaff');
Route::get('/departments', 'PagesController@getDepartment');
Route::get('/new-here', 'PagesController@getNewHere');
Route::get('/contact', 'PagesController@getContact');
Route::get('/donate', 'PagesController@getDonate');
Route::get('/blog-post', 'PagesController@getBlogPost');
Route::get('/sermon-list', 'PagesController@getSermonList');
Route::get('/single-sermon', 'PagesController@getSingleSermon');
Route::get('/single-event', 'PagesController@getSingleEvent');