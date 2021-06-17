<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('semua', function(){
//    return 'Hello API';
    $data = \App\Midsemester::all();
    return $data;
});

Route::get('satu/{id}', function($id){
//    return 'Hello API';
    $data = \App\Midsemester::where('id_043', $id)->first();
    return $data;
});
