<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/login', function () {
//     return view('auth.login');
// });
route::get('/home',[HomeController::class, 'index'])->name('home');

route::get('/topup',[TopupController::class, 'index'])->name('topup');
route::post('/topup',[TopupController::class, 'store']);

route::get('/login',[LoginController::class, 'index'])->name('login');
route::post('/login',[LoginController::class, 'store']);  

route::get('/logout',[LogoutController::class, 'logout'])->name('logout');

route::get('/register',[RegisterController::class, 'index'])->name('register');
route::post('/register',[RegisterController::class, 'store']);  
