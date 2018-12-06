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


    // method use to add product to cart
    public function addToCart($id)
    {
        $product = Product::findorfail($id);

        // check if order is null, then the order batch is 1

        // if not, check if the order has unpaid status, get the order batch to add the product to cart in the batch

        // if not, increment the batch number then add another batch order
    }
}
