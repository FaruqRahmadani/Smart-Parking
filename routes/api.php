<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::GET('status', 'JsonController@Status');
Route::GET('update/{IdParkir}/{Status}', 'JsonController@Update');
Route::GET('dataparkir/statistik', 'JsonController@StatistikDataParkir');
