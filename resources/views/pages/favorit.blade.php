@extends('main.master')
<!-- Section for adding css -->    
@section('css')

@endsection

<!-- Section for adding content page -->    
@section('isi')
<main>
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height-2" data-background="{{ asset('assets/img/banner/banner-favorit.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">Wishlist</h4>
                        <div class="breadcrumb-two">
                            <nav>
                               <nav class="breadcrumb-trail breadcrumbs">
                                  <ul class="breadcrumb-menu">
                                     <li class="breadcrumb-trail">
                                        <a href="{{ url("/marketplace") }}"><span>Home</span></a>
                                     </li>
                                     <li class="trail-item">
                                        <span>Wishlist</span>
                                     </li>
                                  </ul>
                               </nav> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-banner-area-end -->

    <!-- cart-area-start -->
    <section class="cart-area pb-120 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Produk</th>
                                        <th class="cart-product-name">Nama Produk</th>
                                        <th class="product-price">Harga</th>
                                        <th class="product-quantity">Kuantitas</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/cart/light-jacket.jpg') }}" alt=""></a></td>
                                        <td class="product-name"><a href="{{ url("/marketplace/shop/product-detail") }}">Light Jacket</a></td>
                                        <td class="product-price"><span class="amount">Rp. 130.000</span></td>
                                        <td class="product-quantity">
                                            <button class="tp-btn-h1" type="submit">Masukkan Keranjang</button>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">Rp. 130.000</span></td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/cart/pink-jacket.jpg') }}" alt=""></a></td>
                                        <td class="product-name"><a href="{{ url("/marketplace/shop/product-detail") }}">Pink Jacket</a></td>
                                        <td class="product-price"><span class="amount">Rp. 120.000</span></td>
                                        <td class="product-quantity">
                                            <button class="tp-btn-h1" type="submit">Masukkan Keranjang</button>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">Rp. 120.000</span></td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     <!-- cart-area-end -->

</main>
@endsection

<!-- Section for adding script js -->    
@section('script')

    @endsection