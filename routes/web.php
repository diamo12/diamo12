<?php

use Illuminate\Support\Facades\Route;
use App\Models\Guestbook;
use App\Http\Resources\GuestbookResource;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/issTracker', function () {
    return view('issTracker');
})->name('issTracker');

Route::get('/guestbook-logs', function () {
    return Guestbook::all()->toGuestbookResource();
});

Route::get('/fallout-randomizer', 'App\Http\Controllers\falloutRandomizer\FalloutRandomizerController@index')->name('fallout.Randomizer');
Route::get('/tip-calc', 'App\Http\Controllers\tipCalc\tipCalcController@index')->name('tip.Calculator');

