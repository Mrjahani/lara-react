<?php

use Illuminate\Http\Request;


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get("/test",function (){
//    return[
//        "message"=>request()->name." "."به وبلاگ مسعود خوش امدید "
//    ];
//});
Route::post('/login',[
    'uses' => 'Api\Authcontroller@login'
]);