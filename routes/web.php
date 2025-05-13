<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', 'App\Http\Controllers\GameController@index')->name('games.index');
Route::get('/players', 'App\Http\Controllers\PlayerController@index')->name('players.index');
