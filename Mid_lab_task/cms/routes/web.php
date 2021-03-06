<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",[LoginController::class,'index']);
Route::post("/login",[LoginController::class,'verify']);
Route::get("/home",[HomeController::class,'index']);
Route::get("/signup",[SignupController::class,'index']);
Route::get("/users",[UserController::class,'index']);
Route::get("/customers",[CustomerController::class,'getdata']);