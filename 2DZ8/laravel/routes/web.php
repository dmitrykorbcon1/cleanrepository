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
Route::get('/', 'IndexController@index');
Route::get('/music', 'MusicController@index');
Route::get('/group', 'GroupController@index');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/group', 'AdminController@group');
Route::get('/admin/music', 'AdminController@music');

Route::post('/admin/updhist', 'AdminController@updhist');
Route::post('/admin/updartist', 'AdminController@updartist');
Route::post('/admin/deleteartist', 'AdminController@deleteartist');
Route::post('/admin/insertartist', 'AdminController@insertartist');
Route::post('/admin/updalbum', 'AdminController@updalbum');
Route::post('/admin/deletealbum', 'AdminController@deletealbum');
Route::post('/admin/insertalbum', 'AdminController@insertalbum');
Route::post('/admin/updtrack', 'AdminController@updtrack');
Route::post('/admin/deletetrack', 'AdminController@deletetrack');
Route::post('/admin/inserttrack', 'AdminController@inserttrack');

Route::get('/logout', 'Auth\LoginController@logout');
Auth::routes();

