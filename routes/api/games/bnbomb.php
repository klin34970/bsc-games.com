<?php

use App\Http\Controllers\Api\Games\BNBomb\ScoreController;

/**
 * Protect API with ApiGame Middleware
 */
Route::group(['middleware' => ['api.games']], function(){
    Route::post('games/bnbomb/score', [ScoreController::class, 'create']);
});

