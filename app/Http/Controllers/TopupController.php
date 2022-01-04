<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topup;


class TopupController extends Controller
{
    public function __construct()
    {
        $this-> middleware(['auth']);
    }
    public function index(){
        return view('topup');
    }

    public function store(Request $request){
        $this->validate($request,[
            'topup'=> 'required'
        ]);
        $request->user()->topup()->create([
            'topup'=>$request->topup
        ]);
      
        return back();
    }
}
