<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DeliveryLoginController extends Controller
{
    public function login(Request $request)
    {

        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($login)) {
            return response()->json([
                "code" => "401",
                'message' => 'plaese check your email or password !',
                "token"=> null,
                "role"=>  null
            ]);
        }


        if (!Hash::check($request->password, Auth::user()->password)) {
            return response()->json([
                "code" => "401",
                'message' => "plaese check your email or password !!",
                "token"=> null,
                "role"=>  null
            ]);
        }

        if (Auth::user()->role == "user" || Auth::user()->role == "usa-admin" || Auth::user()->role == "admin") {
            return response()->json([
                "code" => "401",
                'message' => "plaese check your email or password !!",
                "token"=> null,
                "role"=>  null
            ]);
        }

        /** @var \App\Models\User */
        $currentUser = Auth::user();
        $accessToken = $currentUser->createToken('authToken')->accessToken;



        return response()->json([
            "id" => Auth::user()->id,
            "code" => "200",
            "message" => "Authentication success!",
            "token"=> $accessToken,
            "role"=>  Auth::user()->role
        ]);
    }
}
