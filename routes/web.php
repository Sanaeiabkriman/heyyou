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

Route::get('/', 'SiteController@index');

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
Route::get('/admin/adpresentation', 'PresentationController@index');
Route::get('/read', 'PresentationController@index');
Route::get('/admin/adpresentation/edit/{id}', 'PresentationController@edit');
Route::post('/admin/adpresentation/update/{id}', 'PresentationController@update');