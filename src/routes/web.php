<?php

use Illuminate\Support\Facades\Route;
use Name\Rockpaperscissors\Http\Controllers\GameController;

Route::get('rock-paper-scissors', [GameController::class, 'index'])->name('rockpaperscissors.index');
Route::post('rock-paper-scissors/play', [GameController::class, 'play'])->name('rockpaperscissors.play');
