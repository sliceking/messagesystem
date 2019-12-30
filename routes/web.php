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

Route::get('/', 'MessagesController@index');

Auth::routes();

Route::get('/home', 'MessagesController@index')->name('home');
Route::get('/create/{id?}/{subject?}', 'MessagesController@create')->name('create');
Route::post('/send', 'MessagesController@send')->name('send');
Route::get('/sent', 'MessagesController@sent')->name('sent-messages');
Route::get('/deleted', 'MessagesController@deleted')->name('deleted-messages');
Route::get('/read/{id}', 'MessagesController@read')->name('read');
Route::get('/delete/{id}', 'MessagesController@delete')->name('delete');
Route::get('/return/{id}', 'MessagesController@return')->name('return');
