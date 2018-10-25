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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'],function(){
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'StoreController@index')->name('index');
        Route::group(['prefix' => 'store'], function () {
            Route::get('create', 'StoreController@getAdd')->name('store.getAdd');
            Route::post('create', 'StoreController@postAdd')->name('store.postAdd');
        });
    });
});
