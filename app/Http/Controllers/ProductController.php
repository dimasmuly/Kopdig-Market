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

    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('keranjang');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $keranjang = session()->get('keranjang', []);
  
        if(isset($keranjang[$id])) {
            $keranjang[$id]['quantity']++;
        } else {
            $keranjang[$id] = [
                "business_detail_id" => $product->business_detail_id,
                "product_category_id" => $product->product_category_id, 
                "name" => $product->name,
                "price" => $product->price,
                "stock" => $product->stock,
                "description" => $product->description,
                "quantity" => 1,
                "thumbnail" => $product->thumbnail,
                "production_date" => $product->production_date,
                "discount" => $product->discount,
                "weight" => $product->weight,
                "voucher_id" => $product->voucher_id
            ];
        }
          
        session()->put('keranjang', $keranjang);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $keranjang = session()->get('cart');
            $keranjang[$request->id]["quantity"] = $request->quantity;
            session()->put('keranjang', $keranjang);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $keranjang = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('keranjang', $keranjang);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
