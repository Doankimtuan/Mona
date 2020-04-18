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

Route::get('/', 'PageController@index');
Route::get('/gioi-thieu', 'PageController@getIntroduce');
Route::get('/cua-hang', 'PageController@getStore');
Route::get('/kien-thuc', 'PageController@getKnowledge');
Route::get('/lien-lac', 'PageController@getContact');
Route::get('/chi-tiet-san-pham/{id}', 'PageController@getDetail');

Route::get('/Add-Cart/{id}', 'PageController@AddCart');
Route::get('/Delete-Item-Cart/{id}', 'PageController@DeleteItemCart');
Route::get('/dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@getCheckOut'
]);
//vao controler thuc hien ham postCheckOut
Route::post('/dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@postCheckOut'
]);

Route::post('/save-cart', 'PageController@save_cart');

Route::get('search', 'PageController@search')->name('search');


Route::get('/admin', [
    'as' => 'admin',
    'uses' => 'HomeController@index'
]);

Auth::routes();

Route::get('/home', 'PageController@index')->name('home');
