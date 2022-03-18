<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password' =>'required'
        ]);
       if (!auth()->attempt($request->only('email','username','password'))){
                return back()->with('status','Invalid Login Credentials');
       };

       return redirect()->route('home');
    }
    public function user_login(Request $request){
        return $request;
    }
}
