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
Route::get('/', 'PageController@popular');


Route::get('/newarrivals', 'NewarrivalsController@index');
Route::get('/newarrivals/{newarrival}/show', 'NewarrivalsController@show');


Route::get('/sale', 'PageController@sale');


Route::get('/products', 'ProductsController@index');
Route::get('/products/{product}/show','ProductsController@show');

Route::get('/register','PageController@register');
Route::get('/user','UserController@index');

Route::get('/login','FalidasiLogin@login');

Route::post('/postlogin','FalidasiLogin@postlogin');


Route::Post('/register','RegisterController@create');
Route::get('/register','RegisterController@getRegister')->name('register');



Route::get('/admin', 'BarangController@index')->name('admin');



Route::patch('/barang/{barang}', 'BarangController@update');
Route::get('/barang/{barang}/edit', 'BarangController@edit');
Route::get('/barang/create', 'BarangController@create');
Route::post('/barang/create', 'BarangController@store');

Route::get('/barang/{barang}/detail','BarangController@show');
Route::get('/barang/{barang}','BarangController@destroy');







