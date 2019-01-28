<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        $user = User::where([
            "username" =>request()->username,
            "password" =>request()->password,
        ])->first();
        dd($user);
//        dd(request()->all());
    }
}
