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
})->name('home');

Route::get('/portofolio-saya', function () {
    return view('profile');
})->name('porto');

Route::get('/identitas-saya', 'ProfileController@index')->name('iden');

// route untuk product
//Route::resource('product', 'ProductController');
Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product/add', 'ProductController@add')->name('product.add');
Route::post('product/save', 'ProductController@save')->name('product.save');


// route untuk Ujian
Route::get('ujian', 'UjianController@index')->name('ujian.index');
Route::get('ujian/create', 'UjianController@create')->name('ujian.create');
Route::post('ujian/store', 'UjianController@store')->name('ujian.store');
Route::get('ujian/{id}/destroy', 'UjianController@destroy')->name('ujian.destroy');


Route::get('mid', 'UtsController@index');
