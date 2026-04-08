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
        $posts = Product::all();
        return view('index', compact('products'));
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
        return redirect()->route('index')->with('success', 'Post created successfully');
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
        $posts = Product::findOrFail($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        $validated = $request->validate([
        'title' => 'required|min:2|max:30',
        'body' => 'required|min:3',
        ]);
        
       $post = Product::findOrFail($id);//find the post
       $post->update($validated);//update the post with the new data

        return redirect()->route('index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $post = Product::findOrFail($id);//find the post
        $post->delete();//delete the post 

        return redirect()->route('index')->with('success', 'Post deleted successfully');
    }
}
