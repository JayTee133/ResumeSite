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


//we're going to use vue to route, not laravel, so have it catch all here
//and pass it off to our SPA
Route::get('/{any}', 'SPAController@index')->where('any', '.*'); 