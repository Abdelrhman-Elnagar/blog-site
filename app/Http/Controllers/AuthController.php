<?php

namespace App\Http\Controllers;

use App\Http\Requests\regPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function reg(){
        return view("auth.reg");
    }
    public function regPost(regPostRequest $request){
        // dd($request->all());

        $request->validated();

        dd($request->all());

        $save= new User();
        $save->name=(trim($request->name));
        $save->email=(trim($request->email));
        $save->password=(trim(Hash::make($request->password)));
        $save->save();

        return redirect()->route("blog.index");
        // ->with('success','you registration to our site ');      //flash session
    }

    public function fPass(){
        return view("auth.fPass");
    }
}
