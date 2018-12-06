<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // method use to access admin dashboard
    public function dashboard()
    {
    	return view('admin.dashboard');
    }
}
