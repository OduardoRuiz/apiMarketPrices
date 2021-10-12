<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;


class MarketController extends Controller
{
    public function index()
    {
        return response()->json(Market::all());
    }

    public function store(Request $request)
    {
        $market = Market::create($request->all());
        return response()->json($market);
    }

    public function show(Market $market)
    {
        
        return response()->json(Market::with('Products')->where('id', $market->id)->get());
    }

    public function update(Request $request, Market $market)
    {
        $market->update($request->all());
        return response()->json($market);
    }

    public function destroy(Market $market)
    {
        $market->delete();
        return response()->json($market);
    }

    public function priceUpdate(Request $request, Market $market)
    { 
        $product=[];
        $product[$request->product_id] = ['price' => $request->price];

        $allProducts = []; 
        foreach($request->all() as $product) { 
            $allProducts [$product['product_id']] = ['price' => $product['price']];
         }

         $market->Products()->sync($allProducts, false);


    }
}

