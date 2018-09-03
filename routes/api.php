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

Route::get('dates', 'DatesController@getAll')->name('getAllDates');

Route::post('dates', 'DatesController@add')->name('addDate');

Route::get('dates/{id}', 'DatesController@get')->name('getDate');

Route::post('dates/{id}', 'DatesController@edit')->name('editDate');

Route::post('dates/delete/{id}', 'DatesController@delete')->name('deleteDate');