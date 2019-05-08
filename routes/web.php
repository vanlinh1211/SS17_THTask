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

Route::get('/', 'TaskController@showIndex')->name('task.index');
Route::get('/create', 'TaskController@create')->name('task.create');
Route::post('/crate', 'TaskController@store')->name('task.store');
Route::get('/{id}/delete', 'TaskController@destroy')->name('task.destroy');
Route::get('/{id}/update', 'TaskController@update')->name('task.update');
Route::post('/{id}/update', 'TaskController@edit')->name('task.edit');