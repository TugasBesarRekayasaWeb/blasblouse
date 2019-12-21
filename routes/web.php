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
Route::get('/', 'PageController@home')->name('index');
Route::get('/newarrival', 'PageController@newarrival');
Route::get('/bestseller', 'PageController@bestseller');
Route::get('/sale', 'PageController@sale');
Route::get('/product', 'ProductController@index');


Route::get('/register','PageController@register');
Route::get('/admin','AdminController@index');
Route::get('/user','UserController@index');

Route::get('/login','FalidasiLogin@login');

Route::post('/postlogin','FalidasiLogin@postlogin');


Route::Post('/register','RegisterController@create');
Route::get('/register','RegisterController@getRegister')->name('register');


Route::get('/barang', 'BarangController@index');
Route::get('/barang/create', 'BarangController@create');
Route::get('/barang/{brg}', 'BarangController@show');
Route::post('/barang', 'BarangController@store');
Route::delete('/barang/{barang}', 'BarangController@destroy');
Route::get('/barang/{barang}/edit', 'BarangController@edit');
Route::patch('/barang/{barang}', 'BarangController@update');





