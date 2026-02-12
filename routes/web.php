<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/fallout-randomizer', 'App\Http\Controllers\falloutRandomizer\FalloutRandomizerController@index')->name('fallout.Randomizer');
Route::get('/tip-calc', 'App\Http\Controllers\tipCalc\tipCalcController@index')->name('tip.Calculator');;

