<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show ($id)
    {
        $products = Product::findOrFail($id)->get();
        dd($products);

        return view('file view', compact('products'));
    }
}
