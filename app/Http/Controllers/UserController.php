<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name ='Fahad';
        $users =array(
            "name"=>"Md. Fahad",
             "email"=>"cscfahad123@gmail.com",
             "phone"=>"01751950401"
        );
        return view('user',compact('name','users'));
    }
}
