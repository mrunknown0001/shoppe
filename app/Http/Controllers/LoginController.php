<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

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
    	$request->validate([
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	$email = $request['email'];
    	$password = $request['password'];

    	if(Auth::attempt(['email' => $email, 'password' => $password], 1)) {
    		if(Auth::user()->user_type == 1) {
    			return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
    		}
    		else {
    			return redirect()->route('customer.dashboard')->with('success', 'Welcome Back!');
    		}
    	}

    	return redirect()->route('login')->with('error', 'Login Error! Please Try Again Later.');
    }


    // method use to logout
    public function logout()
    {
    	// add to log

    	// logout here
    	Auth::logout();

    	return redirect()->route('login')->with('success', 'Logged Out!');
    }
}
