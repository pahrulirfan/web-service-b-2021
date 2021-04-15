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
Route::get('product', 'ProductController@index');
