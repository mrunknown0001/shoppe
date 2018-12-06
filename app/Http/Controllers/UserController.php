<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // method use to access customer dashboard
    public function dashboard()
    {
    	return view('customer.dashboard');
    }
}
