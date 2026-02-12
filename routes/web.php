<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fallout-randomizer', 'App\Http\Controllers\falloutRandomizer\FalloutRandomizerController@index');
Route::get('/tip-calc', 'App\Http\Controllers\tipCalc\tipCalcController@index');

