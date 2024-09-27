<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function index(Request $request){
        $name="Donal Trump";
        $age="75";
        $data=[
            "id"=>$request->id,
            "name"=>$name,
            "age"=>$age
        ];

        $name='access_token';
        $value='123-XYZ';
        $minutes='1';
        $path='/';
        $domain=$_SERVER['SERVER_NAME'];
        $secure='false';
        $httpOnly='true';
        $statusCode=200;
        return response($data,$statusCode)->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
    }
}
