<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/fallout-randomizer', 'App\Http\Controllers\falloutRandomizer\FalloutRandomizerController@index')->name('falloutRandomizer');
Route::get('/tip-calc', 'App\Http\Controllers\tipCalc\tipCalcController@index')->name('tipCalculator');;

