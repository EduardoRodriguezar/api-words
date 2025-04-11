<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/options', [OptionController::class, 'index']);
    Route::get('/words', [WordController::class, 'index']);
    Route::get('/categories/{id}/words', [GameController::class, 'getWords']);
    Route::post('/game/submit', [GameController::class, 'submitAnswers']);
    Route::get('/historial/{playerId}', [GameController::class, 'getPlayedWords']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
