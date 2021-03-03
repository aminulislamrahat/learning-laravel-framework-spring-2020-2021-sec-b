<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    	return view("login");
    }

    public function verify(Request $req)
    {
    	if( $req->mail == $req->password)
    	{
    		return redirect("/home");
    	}
    }
}
