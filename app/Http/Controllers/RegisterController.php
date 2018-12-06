<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    // method use to access register page
    public function register()
    {
    	return view('register');
    }


    // method use to register
    public function postRegister(Request $request)
    {
    	$request->validate([
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|unique:users',
    		'mobile_number' => 'required|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	$firstname = $request['firstname'];
    	$lastname = $request['lastname'];
    	$email = $request['email'];
    	$mobile_number = $request['mobile_number'];
    	$password = $request['password'];

    	// save new user
    	$user = new User();
    	$user->firstname = $firstname;
    	$user->lastname = $lastname;
    	$user->email = $email;
    	$user->mobile_number = $mobile_number;
    	$user->password = bcrypt($password);
    	$user->save();

    	// return to login with success message
    	return redirect()->route('login')->with('success', 'Registration Successful!');
    }
}
