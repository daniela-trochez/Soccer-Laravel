<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('players', PlayerController::class);
Route::resource('goals', GoalController::class);
