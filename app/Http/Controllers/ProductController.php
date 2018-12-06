<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('product_name', 'asc')->paginate(6);

        return view('admin.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-add-update', ['product' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'product_price' => 'required',
            'quantity' => 'required',
            'image' => 'required|mimes:jpeg'
        ]);

        $product_id = $request['product_id'];

        $product_name = $request['product_name'];
        $description = $request['description'];
        $product_price = $request['product_price'];
        $quantity = $request['quantity'];

        if($product_id == null) {

            // upload image
            $photoname = time().'.'.$request->image->getClientOriginalExtension();

            $request->image->move(public_path('uploads/images'), $photoname);

            // save
            $product = new Product();
            $product->product_name = $product_name;
            $product->product_price = $product_price;
            $product->quantity = $quantity;
            $product->description = $description;
            $product->image = $photoname;
            $product->save();


            // return with success
            return redirect()->route('admin.add.product')->with('success', 'Product Successfully Added!');

        }
        else {

            // upload image
            $photoname = time().'.'.$request->image->getClientOriginalExtension();

            $request->image->move(public_path('uploads/images'), $photoname);

            $product = Product::findorfail($product_id);
            $product->product_name = $product_name;
            $product->product_price = $product_price;
            $product->quantity = $quantity;
            $product->description = $description;
            $product->image = $photoname;
            $product->save();

            // return with success
            return redirect()->route('admin.products')->with('success', 'Product Successfully Updated!');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $product = Product::findorfail($id);

        return view('admin.product-add-update', ['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::findorfail($id);
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product Deleted!');
    }
}
