<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\hash;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
}
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255',
            'username'=>'required:max:255',
            'email'=>'required|email|max:255',
            'role' =>'required|max:255',
            'password' =>'required|confirmed',
        ]);
       User::create([
           'name'=>$request->name,
           'username'=>$request->username,
           'email'=>$request->email,
           'role'=>$request->role,
           'password'=>Hash::make($request->password)
       ]);

       auth()->attempt($request->only('email','username','password'));

       return redirect()->route('home');
    }
}
