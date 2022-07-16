<!-- calling the main part -->
@extends('main.master')

<!-- Section for adding css -->
@section('css')

@endsection

<!-- Section for adding content page -->
@section('isi')
 <!-- offcanvas area start -->
 <div class="offcanvas__area">
    <div class="offcanvas__wrapper">
    <div class="offcanvas__close">
        <button class="offcanvas__close-btn" id="offcanvas__close-btn">
            <i class="fal fa-times"></i>
        </button>
    </div>
    <div class="offcanvas__content">
        <div class="offcanvas__logo mb-40">
            <a href="{{ url("/marketplace") }}">
            <img src="{{ asset('assets/img/logo-kopdig.png')}}" alt="logo">
            </a>
        </div>
        <div class="offcanvas__search mb-25">
            <form action="#">
                <input type="text" placeholder="What are you searching for?">
                <button type="submit" ><i class="far fa-search"></i></button>
            </form>
        </div>
        <div class="mobile-menu fix"></div>
        <div class="offcanvas__action">

        </div>
    </div>
    </div>
</div>
<!-- offcanvas area end -->
<div class="body-overlay"></div>
<!-- offcanvas area end -->
<main>
    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="swiper-container slider__active">
            <div class="slider-wrapper swiper-wrapper">
                <div class="single-slider swiper-slide slider-height d-flex align-items-center" data-background="{{ asset('assets/img/slider/sepatu5.png') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="slider-content">
                                    <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1.5s">
                                        <a href="product-details.html" class="st-btn b-radius">PENAWARAN MENARIK</a>
                                    </div>
                                    <h2 data-animation="fadeInLeft" data-delay="1.7s" class="pt-15 slider-title pb-5">DISKON 30% <br>SEPATU SEPAK BOLA</h2>
                                    <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.9s">DisKON 30% Pada Produk & Gratis Ongkir</p>
                                    <div class="slider-bottom-btn mt-75">
                                        <a data-animation="fadeInUp" data-delay="1.15s" href="{{url('/marketplace/shop')}}" class="st-btn-b b-radius">Beli Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /single-slider -->
                <div class="single-slider swiper-slide slider-height d-flex align-items-center" data-background="{{ asset('assets/img/slider/samsung.png') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="slider-content">
                                    <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1s">
                                        <a href="product-details.html" class="st-btn b-radius">Produk Baru</a>
                                    </div>
                                    <h2 data-animation="fadeInLeft" data-delay="1.5s" class="pt-15 slider-title pb-5">DISKON 20%<br> SAMSUNG GALAXY BUDS </h2>
                                    <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.7s">Diskon 30% Pada Produk & Gratis Ongkir</p>
                                    <div class="slider-bottom-btn mt-75">
                                        <a data-animation="fadeInUp" data-delay="1.9s" href="{{url('/marketplace/shop')}}" class="st-btn-b b-radius">Beli Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /single-slider -->
                <div class="single-slider swiper-slide slider-height d-flex align-items-center" data-background="{{ asset('assets/img/slider/sepatu-football.png') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="slider-content">
                                    <div class="slider-top-btn" data-animation="fadeInLeft" data-delay="1s">
                                        <a href="product-details.html" class="st-btn b-radius">Penawaran Baru</a>
                                    </div>
                                    <h2 data-animation="fadeInLeft" data-delay="1.5s" class="pt-15 slider-title pb-5">Diskon 30% <br> Sepatu Sepak Bola</h2>
                                    <p class="pr-20 slider_text" data-animation="fadeInLeft" data-delay="1.8s">Diskon 30% Pada Produk & Gratis Ongkir</p>
                                    <div class="slider-bottom-btn mt-75">
                                        <a data-animation="fadeInUp" data-delay="1.10s" href="{{url('/marketplace/shop')}}" class="st-btn-b b-radius">Beli Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /single-slider -->
                <div class="main-slider-paginations"></div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- features__area-start -->
    <section class="features__area pt-20">
        <div class="container">
            <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-20">
                            <i class="fal fa-truck"></i>
                        </div>
                        <div class="features__content">
                            <h6>Gratis Ongkir</h6>
                            <p>Untuk Semua Pesanan Di Atas Rp. 120.000</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-20">
                            <i class="fal fa-money-check"></i>
                        </div>
                        <div class="features__content">
                            <h6>Pembayaran Aman</h6>
                            <p>100% Pembayaran Aman</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item d-flex white-bg">
                        <div class="features__icon mr-20">
                            <i class="fal fa-comments-alt"></i>
                        </div>
                        <div class="features__content">
                            <h6>Pusat Bantuan</h6>
                            <p>Dukungan Khusus</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="features__item features__item-last d-flex white-bg">
                        <div class="features__icon mr-20">
                            <i class="fad fa-user-headset"></i>
                        </div>
                        <div class="features__content">
                            <h6>Pelayanan Yang Ramah</h6>
                            <p>Jaminan kepuasan 30 hari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features__area-end -->

    <!-- banner__area-start -->
    <section class="banner__area pt-20 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item p-relative w-img mb-30">
                        <div class="banner__img">
                            <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/phone.png') }}" alt=""></a>
                        </div>
                        <div class="banner__content">
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Gadget <br> New Gadget</a></h6>
                            <p>Diskon  20% pada Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item p-relative mb-30 w-img">
                        <div class="banner__img">
                            <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/headset.png') }}" alt=""></a>
                        </div>
                        <div class="banner__content">
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">On-sale <br> Harga terbaik</a></h6>
                            <p>Waktu Terbatas!</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="banner__item p-relative mb-30 w-img">
                        <div class="banner__img">
                            <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/laptop.png') }}" alt=""></a>
                        </div>
                        <div class="banner__content">
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Diskon Besar Besaran <br> Super Laptops 2022 </a></h6>
                            <p>Gratis Ongkir! Semua Pesanan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner__area-end -->

    <!-- topsell__area-start -->
    <section class="topsell__area-1 pt-15">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-10">
                        <div class="section__title">
                            <h5 class="st-titile-d">Penawaran Terbaik Hari Ini</h5>
                        </div>
                        <div class="offer-time">
                            <span class="offer-title d-none d-sm-block">Ayo cepat! Penawaran berakhir di:</span>
                            <div class="countdown">
                                <div class="countdown-inner b-radius" data-countdown="" data-date="Mar 02 2022 20:20:22">
                                    <ul class="text-center">
                                        <li><span data-days="">36</span> Days</li>
                                        <li><span data-hours="">8</span> Hours</li>
                                        <li><span data-minutes="">16</span> Mins</li>
                                        <li><span data-seconds="">54</span> Secs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-bs-slider">
                    <div class="product-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($products as $item)
                                <div class="product__item swiper-slide">
                                    <div class="product__thumb fix">
                                        <div class="product-image w-img">
                                            <a href="/marketplace/shop/product-detail/{{$item->id}}">
                                                <img src="{{$item->thumbnail }}" alt="product">
                                            </a>
                                        </div>
                                        <div class="product__offer">
                                        <span class="discount">-15%</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                <i class="fal fa-eye"></i>
                                                <i class="fal fa-eye"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-heart"></i>
                                                <i class="fal fa-heart"></i>
                                            </a>
                                            <a href="#" class="icon-box icon-box-1">
                                                <i class="fal fa-layer-group"></i>
                                                <i class="fal fa-layer-group"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <h6><a href="{{ url("/marketplace/shop/product-detail") }}">{{ $item->name}}</a></h6>
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            </ul>
                                            <span>(01 review)</span>
                                        </div>
                                        <div class="price mb-10">
                                            <span>{{$item->price}}</span>
                                        </div>
                                        <div class="progress mb-5">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress-rate">
                                            <span>Sold:312/1225</span>
                                        </div>
                                    </div>
                                    <div class="product__add-cart text-center">
                                        <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                        Masukkan Keranjang
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="bs-button bs-button-prev"><i class="fal fa-chevron-left"></i></div>
                    <div class="bs-button bs-button-next"><i class="fal fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- topsell__area-end -->

    <!-- banner__area-start -->
    <section class="banner__area banner__area-d pb-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="banner__item p-relative w-img mb-30">
                        <div class="banner__img">
                            <a href="/marketplace/shop/product-detail/"><img src="{{ asset('assets/img/banner/pc-keyboard.png') }}" alt=""></a>
                        </div>
                        <div class="banner__content">
                            <span>Produk Terbaik</span>
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">PC & Aksesoris</a></h6>
                            <p>Diskon 20% Off, Top Kualitas Produk</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="banner__item p-relative mb-30 w-img">
                        <div class="banner__img">
                            <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/iphone.png') }}" alt=""></a>
                        </div>
                        <div class="banner__content">
                            <span>Produk Unggulan</span>
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Aksesoris Phone</a></h6>
                            <p>Gratis Ongkir Semua Pesanan Lebih Dari Rp. 100.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner__area-end -->

    <!-- topsell__area-start -->
    <section class="topsell__area-2 pt-15">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-10">
                        <div class="section__title">
                            <h5 class="st-titile">Produk Terlaris</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tab-content" id="flast-sell-tabContent">
                        <div class="tab-pane fade active show" id="computer" role="tabpanel" aria-labelledby="computer-tab">
                            <div class="product-bs-slider-2">
                                <div class="product-slider-2 swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($products as $item)
                                        <div class="product__item swiper-slide">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="/marketplace/shop/product-detail/{{$item->id}}">
                                                        <img src="{{$item->thumbnail }}" alt="product">
                                                    </a>
                                                </div>
                                                <div class="product__offer">
                                                <span class="discount">-15%</span>
                                                </div>
                                                <div class="product-action">
                                                    <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        <i class="fal fa-eye"></i>
                                                        <i class="fal fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="icon-box icon-box-1">
                                                        <i class="fal fa-heart"></i>
                                                        <i class="fal fa-heart"></i>
                                                    </a>
                                                    <a href="#" class="icon-box icon-box-1">
                                                        <i class="fal fa-layer-group"></i>
                                                        <i class="fal fa-layer-group"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h6><a href="/marketplace/shop/product-detail/{{$item->id}}">{{$item->name}}</a></h6>
                                                <div class="rating mb-5">
                                                    <ul>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    </ul>
                                                    <span>(01 review)</span>
                                                </div>
                                                <div class="price">
                                                    <span>{{$item->price}}</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart text-center">
                                                <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- If we need navigation buttons -->
                                <div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
                                <div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- topsell__area-end -->

    <!-- featured-start -->
    <section class="featured light-bg pt-55 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-30">
                        <div class="section__title">
                            <h5 class="st-titile">Produk Unggulan Teratas</h5>
                        </div>
                        <div class="button-wrap">
                            <a href="{{ url("/marketplace/shop") }}">See All Product <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="single-features-item single-features-item-d b-radius mb-20">
                        <div class="row  g-0 align-items-center">
                            <div class="col-md-6">
                                <div class="features-thum">
                                    <div class="features-product-image w-img">
                                        <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/features-product/samsung.png') }}" alt=""></a>
                                    </div>
                                    <div class="product__offer">
                                        <span class="discount">-15%</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <i class="fal fa-eye"></i>
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-heart"></i>
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-layer-group"></i>
                                            <i class="fal fa-layer-group"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product__content product__content-d">
                                    <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
                                    <div class="rating mb-5">
                                        <ul class="rating-d">
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        </ul>
                                        <span>(01 review)</span>
                                    </div>
                                    <div class="price d-price mb-10">
                                        <span>Rp. 4.500.000 <del>Rp. 4.700.000</del></span>
                                    </div>
                                    <div class="features-des mb-25">
                                        <ul>
                                            <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                            <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                            <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                            <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                        </ul>
                                    </div>
                                    <div class="cart-option">
                                        <a href="{{ url("/marketplace/keranjang") }}" class="cart-btn-2 w-100 mr-10">Masukkan Keranjang</a>
                                        <a href="{{ url("/marketplace/keranjang") }}" class="transperant-btn"><i class="fal fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="{{ url("/marketplace/shop/product-detail") }}tml"><img src="{{ asset('assets/img/features-product/apple-watch.png') }}" alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Epple Watch SE Gold Aluminum</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price d-price">
                                                <span>Rp. 5.600.000 <del>Rp. 5.700.000</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/features-product/headset-g951.png') }}" alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-5%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">G951s Pink Stereo Gaming Headset</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price d-price">
                                                <span>Rp. 2.000.000 <del>Rp. 2.500.000</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/features-product/headset.png') }}" alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-25%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Solo3 Wireless On-Ear Headphones</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price d-price">
                                                <span>Rp. 5.000.000</del> Rp. 6.000.000</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/features-product/shirt.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Men’s Short-Sleeve Pocket Oxford Shirt</a></h6>
                                            <div class="rating mb-5">
                                                <ul>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                                <span>(01 review)</span>
                                            </div>
                                            <div class="price d-price">
                                                <span>Rp. 200.000 <del>Rp. 120.000</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured-end -->

    <!-- moveing-text-area-start -->
    <section class="moveing-text-area">
        <div class="container">
            <div class="ovic-running">
                <div class="wrap">
                    <div class="inner">
                        <p class="item">Selamat datang di platform kami  |   kopdig.id-market</p>
                        <p class="item">voucher kupon / kodepromo dengan potongan 15% / Code: KOPDIG-2020</p>
                        <p class="item">barang bagus. harga kompetitif. layanan terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- moveing-text-area-end -->

    <!-- banner__area-start -->
    <section class="banner__area pt-60 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="banner__item p-relative w-img mb-30">
                        <div class="banner__img">
                            <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/xbox.png') }}" alt=""></a>
                        </div>
                        <div class="banner__content banner__content-sd text-center">
                            <div class="banner-button mb-20">
                                <a href="{{ url("/marketplace/shop/product-detail") }}" class="st-btn">HOT DEALS</a>
                            </div>
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Sale 30% Off <br> Top Computer Case Gaming</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner__item p-relative mb-30 w-img">
                                <div class="banner__img">
                                    <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/elektronik.png') }}" alt=""></a>
                                </div>
                                <div class="banner__content banner__content-sd text-center">
                                    <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Electronic Deals</a></h6>
                                    <p>Laptop, Computer, Smartphone, Gampad</p>
                                    <div class="banner-button mt-20 d-none d-sm-block">
                                        <a href="{{ url("/marketplace/shop/product-detail") }}" class="st-btn-3 b-radius">Shop Deals</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="banner__item p-relative w-img mb-30">
                                <div class="banner__img">
                                    <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/laptop.jpg') }}" alt=""></a>
                                </div>
                                <div class="banner__content">
                                    <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Hot Products <br> Laptop Ultra 4K 16”</a></h6>
                                    <p>Discount  20% On Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="banner__item p-relative mb-30 w-img">
                        <div class="banner__img">
                            <a href="{{ url("/marketplace/shop/product-detail") }}"><img src="{{ asset('assets/img/banner/sport.jpg') }}" alt=""></a>
                        </div>
                        <div class="banner__content banner__content-sd text-center">
                            <div class="banner-button mb-20">
                                <a href="{{ url("/marketplace/shop/product-detail") }}" class="st-btn">HOT DEALS</a>
                            </div>
                            <h6><a href="{{ url("/marketplace/shop/product-detail") }}">Sport Edition <br> Best Choice of The Year</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner__area-end -->

    <!-- recomand-product-area-start -->
    <section class="recomand-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section__head d-flex justify-content-between mb-10">
                        <div class="section__title">
                            <h5 class="st-titile">Recommended For You</h5>
                        </div>
                        <div class="button-wrap">
                            <a href="{{ url("/marketplace/shop") }}">See All Product <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="product-bs-slider-2">
                    <div class="product-slider-3 swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($products as $item)
                            <div class="product__item mb-20 swiper-slide">
                                <div class="product__thumb fix">
                                    <div class="product-image w-img">
                                        <a href="{{ url("/marketplace/shop/product-detail") }}">
                                            <img src="{{$item->thumbnail }}" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__offer">
                                    <span class="discount">-15%</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
                                            <i class="fal fa-eye"></i>
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-heart"></i>
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="#" class="icon-box icon-box-1">
                                            <i class="fal fa-layer-group"></i>
                                            <i class="fal fa-layer-group"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h6><a href="{{ url("/marketplace/shop/product-detail") }}">{{$item->name}}</a></h6>
                                    <div class="rating mb-5">
                                        <ul>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        </ul>
                                        <span>(01 review)</span>
                                    </div>
                                    <div class="price">
                                        <span>{{$item->price}}</span>
                                    </div>
                                </div>
                                <div class="product__add-cart text-center">
                                    <button type="button" class="cart-btn product-modal-sidebar-open-btn d-flex align-items-center justify-content-center w-100">
                                    Masukkan Keranjang
                                    </button>
                                </div>
                            </div>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recomand-product-area-end -->

    <!-- brand-area-start -->
   <!-- <section class="brand-area brand-area-d">
        <div class="container">
            <div class="brand-slider swiper-container pt-50 pb-45">
                <div class="swiper-wrapper">
                    <div class="brand-item w-img swiper-slide">
                        <a href="#"><img src="{{ asset('assets/img/brand/brand-1.jpg') }}" alt="brand"></a>
                    </div>
                    <div class="brand-item w-img swiper-slide">
                        <a href="#"><img src="{{ asset('assets/img/brand/brand-2.jpg') }}" alt="brand"></a>
                    </div>
                    <div class="brand-item w-img swiper-slide">
                        <a href="#"><img src="{{ asset('assets/img/brand/brand-3.jpg') }}" alt="brand"></a>
                    </div>
                    <div class="brand-item w-img swiper-slide">
                        <a href="#"><img src="{{ asset('assets/img/brand/brand-4.jpg') }}" alt="brand"></a>
                    </div>
                    <div class="brand-item w-img swiper-slide">
                        <a href="#"><img src="{{ asset('assets/img/brand/brand-5.jpg') }}" alt="brand"></a>
                    </div>
                    <div class="brand-item w-img swiper-slide">
                        <a href="#"><img src="{{ asset('assets/img/brand/brand-6.jpg') }}" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- brand-area-end -->


</main>
@endsection

<!-- Section for adding script js -->
@section('script')

    @endsection
