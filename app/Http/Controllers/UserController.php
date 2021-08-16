<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class UserController extends Controller
{
    public function register(UserRegistrationRequest $request)
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'user_role_id' => $request->get('user_role')
        ]);
        $token = JWTAuth::fromUser($user);
        $user =$user->toArray();
        $user  = array_merge($user,['token'=>$token]);
        $data['data']=$user;
        return response()->json($data);
    }
}
