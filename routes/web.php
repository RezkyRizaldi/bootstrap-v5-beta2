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
// API
Route::get('/', 'Api\YouTubeController@YouTubeAPI');

Route::get('/virtualpedia', 'PagesController@virtualpedia')->name('virtualpedia');

Route::group(['prefix' => '{locale}'], function() { 
  Route::get('/virtualpedia', 'LocaleController@envirtualpedia')->name('ENVirtualpedia');
  Route::get('/', 'LocaleController@home');
});