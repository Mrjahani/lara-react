<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     *
     */
    public function login()
    {
        /**
         * talash mikone ta peyda kone
         */
        if(Auth::attempt([
            'username'=>\request()->username,
            'password'=>\request()->password,
        ])) {

            return response(['token' => Auth::user()->generateToken()],200);
            return response(['error' => 'Not Response'], 401);
        }
//        dd(Auth::user());
        /**
         * kare check kardan username & password ra anjdam midahad
         */
//        $user = User::where([
//            "username" =>request()->username,
//        ])->first();
//        if (!empty($user)){
//        $check = Hash::check(\request()->password, $user->password);
//        if ($check){
//            return  'bale';
//        }
//        }
        return 'nashod';
//        dd(request()->all());
    }
}
