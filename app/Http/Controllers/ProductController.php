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
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'product_name' => 'required',
        'category' => 'required',
        'desc' => 'required',
        'stock' => 'required',
        ]);

        Product::create($validated);
        return redirect()->route('addProd.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
        'product_name' => 'required',
        'category' => 'required',
        'desc' => 'required',
        'stock' => 'required',
        ]);
        
       $products = Product::findOrFail($id);//find the post
       $products->update($validated);//update the post with the new data

        return redirect()->route('addProd.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);//find the post
        $products->delete();//delete the post 

        return redirect()->route('addProd.index')->with('success', 'Product deleted successfully');
    }
}
