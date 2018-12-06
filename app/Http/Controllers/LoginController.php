<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // method to access login page
    public function login()
    {
    	return view('login');
    }

    // method use to login
    public function postLogin(Request $request)
    {
    	return $request;
    }
}
