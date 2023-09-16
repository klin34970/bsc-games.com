<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiGames
{

    /**
     * @var string[]
     *
     * Hash for each game.
     */
    protected $hashGame = [
        'bnbomb' => '2dpmTVGsMOd6tpeN'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $hash = decrypt($request->get('hash'));
        if($request->isJson() && in_array($hash, $this->hashGame)) {
            return $next($request);
        }
        return response()->json([
            [],
            Response::HTTP_BAD_REQUEST
        ]);
    }
}
