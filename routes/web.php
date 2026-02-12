<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Route::get('/fallout-randomizer', 'App\Http\Controllers\falloutRandomizer\FalloutRandomizerController@index');
});


