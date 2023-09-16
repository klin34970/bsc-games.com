<?php

namespace App\Http\Controllers\Api\Games\BNBomb;

use App\Http\Controllers\Controller;
use App\Http\Requests\Games\BNBomb\ScoreRequest;
use Illuminate\Http\Request;
use App\Models\Games\BNBomb\Score;
use Illuminate\Http\Response;

class ScoreController extends Controller
{
    /**
     * @param ScoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(ScoreRequest $request){
        $validated = $request->validated();
        $score = new Score();
        $score->create($validated);
        return response()->json([
            $validated,
            Response::HTTP_OK
        ]);
    }
}
