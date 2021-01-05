<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\JWTAuth;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = app()->make(JWTAuth::class)->parseToken()->authenticate();
        } catch (\Exception $exception) {
            if ($exception instanceof TokenExpiredException) {
                return response()->json([
                    'status' => false,
                    'message' => 'Token Expired'
                ]);
            } else {
                if ($exception instanceof TokenInvalidException) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Invalid Token'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Token is required'
                    ]);
                }
            }
        }
        return $next($request->merge(['user' => $user]));
    }
}
