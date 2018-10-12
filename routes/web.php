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
// ABOUT ME
Route::get('/admin/adpresentation', 'PresentationController@index');
Route::get('/adpresentation/read', 'PresentationController@index');
Route::get('/admin/adpresentation/editpresentation/{id}', 'PresentationController@edit');
Route::post('/admin/adpresentation/update/{id}', 'PresentationController@update');
Route::post('/admin/adpresentation/create', 'PresentationController@create');
Route::post('/admin/adpresentation/delete/{id}','PresentationController@destroy');
// // route test
// Route::get('/admin/adpresentation/create', 'PresentationController@create')->name('presentation.create');

// MY OFFER
Route::get('/admin/adoffer', 'OfferController@index');
Route::get('/admin/adoffer/editoffer/{id}', 'OfferController@edit');
Route::post('/admin/adoffer/update/{id}', 'OfferController@update');
