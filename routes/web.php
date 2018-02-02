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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard_survey', 'DashboardTwoController@index');

    Route::get('/create_survey', 'MarketingController@index_create');
    Route::get('/edit_survey', 'MarketingController@index_edit');
});

Route::get('/main', 'encController@index');

Route::post('/cache', 'encController@cacheValues');
Route::post('/mac_check', 'encController@macquery');

Route::get('/test', 'encController@testfunc');
