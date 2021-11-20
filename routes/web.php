<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'MainpageController@index');

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/test', 'TestController@index');
Route::get('/recommendations', 'RecommendationsController@index');
Route::get('/statistics', 'StatisticsController@index');
Route::post('/test', 'TestController@store');

Route::get('/response/{id}', 'ResponseController@total_response'); 