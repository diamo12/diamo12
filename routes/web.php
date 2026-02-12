<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fallout-randomizer', 'App\Http\Controllers\falloutRandomizer\FalloutRandomizerController');
