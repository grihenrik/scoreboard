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

Route::get('/', 'BoardController@Board');
Route::get('/test', 'BoardController@Test');
Route::get('/admin','BoardController@Admin');
Route::post('/action','BoardController@UpdateScores');