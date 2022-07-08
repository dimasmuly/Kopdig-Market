<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.home', compact('products'));
    }
    public function shop()
    {
        $products = Product::all();
        return view('pages.shop', compact('products'));
    }
    public function detail_product(Product $product)
    {
        return view('pages.product_detail', compact('product'));
    }
    public function wishlist()
    {
        return view('pages.favorit');
    }
    public function keranjang()
    {
        return view('pages.keranjang');
    }
    public function bayar()
    {
        return view('pages.pembayaran');
    }
    public function lacak_pesanan()
    {
        return view('pages.order_tracking');
    }
    public function profile()
    {
        return view('pages.profile');
    }
}
