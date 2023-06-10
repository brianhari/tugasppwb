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

Route::get('/task/read','MhsAPIController@read');
Route::post('/task/create', 'MhsAPIController@create');
Route::post('/task/update/{id}', 'MhsAPIController@update');
Route::delete('/task/delete/{id}', 'MhsAPIController@delete');
