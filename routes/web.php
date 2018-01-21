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
    return redirect()->route('home');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pilots', 'PilotController@list')->name('pilotList');


Route::resource('user', 'UserController');
Route::resource('guides', 'GuideController');
Route::get('/my/guides', 'GuideController@userGuidesIndex')->name('user.guides');