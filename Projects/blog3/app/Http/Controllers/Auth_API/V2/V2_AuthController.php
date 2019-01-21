<?php

namespace App\Http\Controllers\Auth_API\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class V2_AuthController extends Controller
{
    /**
         * Create user
         *
         * @param  [string] name
         * @param  [string] email
         * @param  [string] password
         * @param  [string] password_confirmation
         * @return [string] message
     */
    protected function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
            // 'password' => 'required|string'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        // $user = new User([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);

        $user->save();

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function signin(Request $request)
    {
    	return 'It works';

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
        ], 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
    */
    public function signout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully signed out'
        ]);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}
