<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function reg(){
        return view("auth.reg");
    }
    public function fPass(){
        return view("auth.fPass");
    }
}
