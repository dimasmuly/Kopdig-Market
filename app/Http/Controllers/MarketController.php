<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function detail_product()
    {
        return view('pages.product_detail');
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