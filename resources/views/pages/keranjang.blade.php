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
                        <h4 class="breadcrumb-title">Keranjang</h4>
                        <div class="breadcrumb-two">
                            <nav>
                               <nav class="breadcrumb-trail breadcrumbs">
                                  <ul class="breadcrumb-menu">
                                     <li class="breadcrumb-trail">
                                        <a href="{{ url("/marketplace") }}"><span>Home</span></a>
                                     </li>
                                     <li class="trail-item">
                                        <span>Cart</span>
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
    <section class="cart-area pt-120 pb-120">
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
                                      <td class="product-thumbnail"><a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/cart/jacket.jpg') }}" alt=""></a></td>
                                      <td class="product-name"><a href="{{ url("/marketplace/shop/product-detail") }}">Jaket Abu-Abu</a></td>
                                      <td class="product-price"><span class="amount">Rp. 130.000</span></td>
                                      <td class="product-quantity">
                                            <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                      </td>
                                      <td class="product-subtotal"><span class="amount">Rp. 130.000</span></td>
                                      <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                   </tr>
                                   <tr>
                                      <td class="product-thumbnail"><a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/cart/jacket-pink.jpg') }}" alt=""></a></td>
                                      <td class="product-name"><a href="{{ url("/marketplace/shop/product-detail") }}">Jaket Pink</a></td>
                                      <td class="product-price"><span class="amount">Rp. 120.000</span></td>
                                      <td class="product-quantity">
                                            <div class="cart-plus-minus"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                      </td>
                                      <td class="product-subtotal"><span class="amount">Rp. 120.000</span></td>
                                      <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                   </tr>
                                </tbody>
                          </table>
                       </div>
                       <div class="row">
                          <div class="col-12">
                                <div class="coupon-all">
                                   <div class="coupon">
                                      <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                      <button class="tp-btn-h1" name="apply_coupon" type="submit">Apply
                                            coupon</button>
                                   </div>
                                   <div class="coupon2">
                                      <button class="tp-btn-h1" name="update_cart" type="submit">Perbarui Keranjang</button>
                                   </div>
                                </div>
                          </div>
                       </div>
                       <div class="row justify-content-end">
                          <div class="col-md-5">
                                <div class="cart-page-total">
                                   <h2>Total Keranjang</h2>
                                   <ul class="mb-20">
                                      <li>Subtotal <span>Rp. 250.000</span></li>
                                      <li>Total <span>Rp. 250.000</span></li>
                                   </ul>
                                   <a class="tp-btn-h1" href="{{ url("/marketplace/bayar ") }}">Lanjutkan Pembayaran</a>
                                </div>
                          </div>
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

