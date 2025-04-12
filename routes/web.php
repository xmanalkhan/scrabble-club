<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('members', MemberController::class);
Route::resource('games', GameController::class);
Route::get('/leaderboard', [MemberController::class, 'leaderboard'])->name('leaderboard');
