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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/gioi-thieu', 'HomeController@getIntroduce');
Route::get('/cua-hang', 'HomeController@getStore');
Route::get('/kien-thuc', 'HomeController@getKnowledge');
Route::get('/chi-tiet-san-pham/{id}', 'HomeController@getDetail');

Route::get('/Add-Cart/{id}', 'HomeController@AddCart');
Route::get('/Delete-Item-Cart/{id}', 'HomeController@DeleteItemCart');
Route::get('/dat-hang', [
    'as' => 'dathang',
    'uses' => 'HomeController@getCheckOut'
]);
//vao controler thuc hien ham postCheckOut
Route::post('/dat-hang', [
    'as' => 'dathang',
    'uses' => 'HomeController@postCheckOut'
]);

Route::post('/save-cart', 'HomeController@save_cart');

Route::get('search', 'HomeController@search')->name('search');