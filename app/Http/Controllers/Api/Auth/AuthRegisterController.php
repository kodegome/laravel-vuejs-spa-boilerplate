<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use App\Http\Requests\Auth\RegisterFormRequest;

class AuthRegisterController extends AuthBaseController
{
    public function __invoke(RegisterFormRequest $request)
    {
        // create user
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        $token = $this->auth->attempt($request->only('email', 'password'));
        
        return response()->json([
            'data' => $user,
            'meta' => [
                'token' => $token
            ]
        ], 200);
        
    }
}