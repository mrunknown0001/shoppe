<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // method use to access customer dashboard
    public function dashboard()
    {
    	return view('customer.dashboard');
    }


    // method use to show products
    public function products()
    {
    	$products = Product::orderBy('product_name', 'asc')->paginate(6);

    	return view('customer.products', ['products' => $products]);
    }
}
