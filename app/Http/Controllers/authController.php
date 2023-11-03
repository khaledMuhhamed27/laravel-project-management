<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class authController extends Controller
{
    //
    public function register(Request $request){
        $validatedData = $request ->validate([
            'name' => 'required|max:55',
            'email'=> 'email|required|unique:users',
            'password'=> 'required',
        ]);

        $validatedData['password']=bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=>$user,'access_token'=>$accessToken]);

    }
}
