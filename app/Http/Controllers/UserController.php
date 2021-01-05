<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
//    public function authenticate(Request $request)
//    {
//        $credential = $request->only(['email', 'password']);
//        $validator = Validator::make($credential, [
//            'email' => 'required',
//            'password' => 'required'
//        ]);
//
//        if (!$validator->fails()) {
//            try {
//                $token = JWTAuth::attempt($credential);
//                if (!$token) {
//                    return response()->json([
//                        'status' => false,
//                        'message' => 'Invalid Credentials'
//                    ]);
//                }
//            } catch (JWTException $exception) {
//                return response()->json([
//                    'status' => false,
//                    'errors' => $exception->getMessage(),
//                    'message' => 'Invalid Credentials'
//                ]);
//            }
//            return response()->json([
//                'status' => true,
//                'token' => compact(['token']),
//                'message' => 'Valid credentials'
//            ]);
//        } else {
//            return response()->json([
//                'status' => false,
//                'errors' => $validator->errors()
//            ]);
//        }
//    }
//
//    public function register(Request $request)
//    {
//        return response()->json([
//            'message' => $request->get('user')
//        ]);
//    }
}
