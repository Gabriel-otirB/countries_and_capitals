<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Start game
Route::get('/', [MainController::class, 'startGame'])->name('start_game');
Route::post('/', [MainController::class, 'prepareGame'])->name('prepare_game');
