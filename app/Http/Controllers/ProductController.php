<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //showing list of products
        $products = Product::latest()->paginate(5);

        return view('Products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the input parameters
        $request-> validate([
            'name' => 'required',
            'detail'=> 'required'
        ]);
        //create a new product in the db

        Product::create($request->all());

        //redirect user and sent message of success
        return redirect()->route('Products.index')->with('success', 'product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         // validate the input parameters
         $request-> validate([
            'name' => 'required',
            'detail'=> 'required'
        ]);
        //update the passed in product in the db

        $product->update($request->all());

        //redirect user and sent message of success
        return redirect()->route('products.index')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // delete the product from storage
        $product->delete();

        // redirect the user & display success message
        return redirect()->route('products.index')->with('success', 'product deleted successfully');

    }
}
