<?php

namespace App\Http\Controllers;

use App\Models\topup;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $topups = topup::get();
        return view('home',[
            'topup'=>$topups
        ]);
    }
}
