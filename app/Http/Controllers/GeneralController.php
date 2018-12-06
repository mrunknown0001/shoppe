<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    // use to access landing page
    public function landing()
    {
    	return view('welcome');
    }
}
