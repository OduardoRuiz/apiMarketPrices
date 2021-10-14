<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all());
    }

    public function store(Request $request)
    {
        // criar produto 1
        $product = Product::create($request->all());

        return response()->json($product);
    }

    public function show(Product $product)
    {
        return response()->json(Product::with('Markets')->where('id',$product->id)->get());
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        
        return response()->json($product);
    }

    public function destroy(Product $product)
    {
        $product->Markets()->detach();
        $product->delete();
        return response()->json($product); 
    }

   
}