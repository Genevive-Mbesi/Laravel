<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request
        $credentials = $request->only('email', 'password');

        try {
            // Attempt to create a token with the user's credentials
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid Credentials'], 401);
            }
        } catch (JWTException $e) {
            // Handle error in token creation
            return response()->json(['error' => 'Could not create token'], 500);
        }

        // Return the token on successful login
        return response()->json(compact('token'));
    }
}
