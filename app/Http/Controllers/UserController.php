<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Auth;

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

        return view('customer.product-view', ['product' => $product]);
    }

    public function postAddToCart(Request $request)
    {
        $request->validate([
            'quantity' => 'required'
        ]);

        $id = $request['product_id'];
        $quantity = $request['quantity'];

        $product = Product::findorfail($id);

        // check if order is null, then the order batch is 1
        $order = Order::where('user_id', Auth::user()->id)->get();

        if(count($order) > 0) {
            $check_if_not_paid = Order::where('user_id', Auth::user()->id)->where('paid', 0)->first();

            if(!empty($check_if_not_paid)) {
                $batch = $check_if_not_paid->order_batch;

                $new_order = new Order();
                $new_order->user_id = Auth::user()->id;
                $new_order->product_id = $product->id;
                $new_order->total = $quantity * $product->product_price;
                $new_order->order_batch = $batch;
                $new_order->save();
            }
            else {
                $last_batch_order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();

                $batch = $last_batch_order->order_batch + 1;

                $new_order = new Order();
                $new_order->user_id = Auth::user()->id;
                $new_order->product_id = $product->id;
                $new_order->total = $quantity * $product->product_price;
                $new_order->order_batch = $batch;
                $new_order->save();
            }
        }
        else {
            $new_order = new Order();
            $new_order->user_id = Auth::user()->id;
            $new_order->product_id = $product->id;
            $new_order->total = $quantity * $product->product_price;
            $new_order->order_batch = 1;
            $new_order->save();

        }

        return redirect()->route('customer.show.products')->with('success', 'Product Added to Cart!');
    }


    // method use to view customer cart
    public function cart()
    {

        $orders = Order::where('user_id', Auth::user()->id)->where('paid', 0)->get();

        $total = Order::where('user_id', Auth::user()->id)->where('paid', 0)->sum('total');

        return view('customer.cart', ['orders' => $orders, 'total' => $total]);
    }


    // method use to checkout
    public function checkout()
    {
        return view('customer.checkout');
    }
}
