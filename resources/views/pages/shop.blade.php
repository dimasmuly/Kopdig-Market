@extends('main.master')
<!-- Section for adding css -->    
@section('css')

<link rel="stylesheet" href="{{ asset('assets/css/ui-range-slider.css')}}">
@endsection

<!-- Section for adding content page -->    
@section('isi')
<main>
    <!-- breadcrumb__area-start -->
    <section class="breadcrumb__area box-plr-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ url("/marketplace") }}">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb__area-end -->

    <!-- shop-area-start -->
    <div class="shop-area mb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Product categories</h5>
                        <div class="widget-category-list mt-20">
                            <form action="#">
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-1" name="cat-item">
                                    <label for="cat-item-1">Clothing &amp; Apparel <span>(12)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-2" name="cat-item">
                                    <label for="cat-item-2">Consumer Electrics <span>(60)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-3" name="cat-item">
                                    <label for="cat-item-3">Computers &amp; Technologies <span>(41)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-4" name="cat-item">
                                    <label for="cat-item-4">Phones &amp; Accessories <span>(28)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-5" name="cat-item">
                                    <label for="cat-item-5">Babies &amp; Moms <span>(21)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-7" name="cat-item">
                                    <label for="cat-item-7">Books &amp; Office <span>(62)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-8" name="cat-item">
                                    <label for="cat-item-8">Sport &amp; Outdoo <span>(22)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-9" name="cat-item">
                                    <label for="cat-item-9">Chairs &amp; Stools <span>(20)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-10" name="cat-item">
                                    <label for="cat-item-10">Furniture &amp; Acessories <span>(06)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-11" name="cat-item">
                                    <label for="cat-item-11">Kitchen &amp; Tableware <span>(30)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-12" name="cat-item">
                                    <label for="cat-item-12">Lighting <span>(30)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="cat-item-13" name="cat-item">
                                    <label for="cat-item-13">Armchairs &amp; Chaises <span>(30)</span></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Filter By Price</h5>
                        <div class="price__slider mt-30">
                            <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                            <div>
                                <form action="#" class="s-form mt-20">
                                    <input type="text" id="amount" readonly="">
                                    <button type="submit" class="tp-btn-square-lg">Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Choose Rating</h5>
                        <div class="widget-category-list mt-20">
                            <form action="#">
                                <div class="single-widget-rating">
                                    <input type="checkbox" id="star-item-1" name="star-item">
                                    <label for="star-item-1">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(54)</span>
                                    </label>
                                </div>
                                <div class="single-widget-rating">
                                    <input type="checkbox" id="star-item-2" name="star-item">
                                    <label for="star-item-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <span>(37)</span>
                                    </label>
                                </div>
                                <div class="single-widget-rating">
                                    <input type="checkbox" id="star-item-3" name="star-item">
                                    <label for="star-item-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <span>(7)</span>
                                    </label>
                                </div>
                                <div class="single-widget-rating">
                                    <input type="checkbox" id="star-item-4" name="star-item">
                                    <label for="star-item-4">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <span>(5)</span>
                                    </label>
                                </div>
                                <div class="single-widget-rating">
                                    <input type="checkbox" id="star-item-5" name="star-item">
                                    <label for="star-item-5">
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <i class="fal fa-star"></i>
                                        <span>(3)</span>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Choose Size</h5>
                        <div class="widget-category-list mt-20">
                            <form action="#">
                                <div class="single-widget-category">
                                    <input type="checkbox" id="choose-item-1" name="choose-item">
                                    <label for="choose-item-1">S <span>(12)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="choose-item-2" name="choose-item">
                                    <label for="choose-item-2">L <span>(60)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="choose-item-3" name="choose-item">
                                    <label for="choose-item-3">M <span>(41)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="choose-item-4" name="choose-item">
                                    <label for="choose-item-4">XXL <span>(28)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="choose-item-5" name="choose-item">
                                    <label for="choose-item-5">2XL <span>(21)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="choose-item-7" name="choose-item">
                                    <label for="choose-item-7">3XL <span>(62)</span></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Choose Brand</h5>
                        <div class="widget-category-list mt-20">
                            <form action="#">
                                <div class="single-widget-category">
                                    <input type="checkbox" id="brand-item-1" name="brand-item">
                                    <label for="brand-item-1">CarRentals <span>(12)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="brand-item-2" name="brand-item">
                                    <label for="brand-item-2">CarVoodoo <span>(60)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="brand-item-3" name="brand-item">
                                    <label for="brand-item-3">Creative <span>(41)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="brand-item-4" name="brand-item">
                                    <label for="brand-item-4">Impact <span>(28)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="brand-item-5" name="brand-item">
                                    <label for="brand-item-5">IQVia <span>(21)</span></label>
                                </div>
                                <div class="single-widget-category">
                                    <input type="checkbox" id="brand-item-7" name="brand-item">
                                    <label for="brand-item-7">LeadsGreen <span>(62)</span></label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="product-widget mb-30">
                        <h5 class="pt-title">Special Offers</h5>
                        <div class="product__sm mt-20">
                            <ul>
                                <li class="product__sm-item d-flex align-items-center">
                                    <div class="product__sm-thumb mr-20">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/backpack.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__sm-content">
                                        <h5 class="product__sm-title">
                                            <a href="product-details.html">Classic Leather Backpack Daypack 2022</a>
                                        </h5>
                                        <div class="product__sm-price">
                                            <span class="price">$300.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product__sm-item d-flex align-items-center">
                                    <div class="product__sm-thumb mr-20">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/samsung-a12.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__sm-content">
                                        <h5 class="product__sm-title">
                                            <a href="product-details.html">Samsung Galaxy A12, 32GB, Black - (Locked)</a>
                                        </h5>
                                        <div class="product__sm-price">
                                            <span class="price">$150.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product__sm-item d-flex align-items-center">
                                    <div class="product__sm-thumb mr-20">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/coffee-maker.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__sm-content">
                                        <h5 class="product__sm-title">
                                            <a href="#">Coffee Maker AH240a Full Function</a>
                                        </h5>
                                        <div class="product__sm-price">
                                            <span class="price">$300.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product__sm-item d-flex align-items-center">
                                    <div class="product__sm-thumb mr-20">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/chair.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__sm-content">
                                        <h5 class="product__sm-title">
                                            <a href="product-details.html">Imported Wooden Felt Cushion Chair</a>
                                        </h5>
                                        <div class="product__sm-price">
                                            <span class="price">$120.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="product__sm-item d-flex align-items-center">
                                    <div class="product__sm-thumb mr-20">
                                        <a href="product-details.html">
                                            <img src="{{ asset('assets/img/product/lampu.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__sm-content">
                                        <h5 class="product__sm-title">
                                            <a href="product-details.html">Sunhouse Decorative Lights - Imported</a>
                                        </h5>
                                        <div class="product__sm-price">
                                            <span class="price">$110.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="product-lists-top">
                        <div class="product__filter-wrap">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter d-sm-flex align-items-center">
                                        <div class="product__col">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="FourCol-tab" data-bs-toggle="tab" data-bs-target="#FourCol" type="button" role="tab" aria-controls="FourCol" aria-selected="true">
                                                    <i class="fal fa-th"></i>
                                                  </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="FiveCol-tab" data-bs-toggle="tab" data-bs-target="#FiveCol" type="button" role="tab" aria-controls="FiveCol" aria-selected="false">
                                                    <i class="fal fa-list"></i>
                                                  </button>
                                                </li>
                                              </ul>
                                        </div>
                                        <div class="product__result pl-60">
                                            <p>Showing 1-20 of 29 relults</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__filter-right d-flex align-items-center justify-content-md-end">
                                        <div class="product__sorting product__show-no">
                                            <select>
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                            </select>
                                        </div>
                                        <div class="product__sorting product__show-position ml-20">
                                            <select>
                                                <option>Latest</option>
                                                <option>New</option>
                                                <option>Up comeing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="tab-content" id="productGridTabContent">
                        <div class="tab-pane fade  show active" id="FourCol" role="tabpanel" aria-labelledby="FourCol-tab">
                            <div class="tp-wrapper">
                                <div class="row g-0">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/jersey.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Men Size Yellow Basketball Jerseys</a></h6>
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
                                                    <span>$110-$150</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/xbox.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Xbox Wireless Game Controller Pink</a></h6>
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
                                                    <span>$130-$150</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/headset.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Wireless Bluetooth Over-Ear Headphones</a></h6>
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
                                                    <span>$135-$150</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/headset.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Solo3 Wireless On-Ear Headphones</a></h6>
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
                                                    <span>$140-$150</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/speaker.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Vifa Bluetooth Portable Wireless Speaker</a></h6>
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
                                                    <span>$140-$200</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/appo-r11s.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">APPO R11s 64GB Dual 20MP Cameras</a></h6>
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
                                                    <span>$100-$120</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/headset-g951.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">G951s Pink Stereo Gaming Headset</a></h6>
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
                                                    <span>$145-$150</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/ipad.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Epple iPhone 11 Pro Max 64GB Gold</a></h6>
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
                                                    <span>$120-$140</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/xbox.png" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Casentino Bucket Hat Luxury Goods – Imported</a></h6>
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
                                                    <span>$110-$140</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-12.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Classic Leather Backpack Daypack 2022</a></h6>
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
                                                    <span>$105-$140</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-13.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Coffee Maker AH240a Full Function</a></h6>
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
                                                    <span>$170-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-14.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Imported Wooden Felt Cushion Chair</a></h6>
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
                                                    <span>$160-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-15.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Sunhouse Decorative Lights – Imported</a></h6>
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
                                                    <span>$120-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-16.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Korea Stainless Steel Pot Set 5 Piecs</a></h6>
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
                                                    <span>$125-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-17.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">HP Stainless Steel Hot Water Bottle</a></h6>
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
                                                    <span>$170-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-18.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">The North Face Womens Resolve 2 Jack</a></h6>
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
                                                    <span>$150-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-22.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Diesel J Ross Rev Reversy Bomber Jacket</a></h6>
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
                                                    <span>$180-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-23.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">HOT – H&M “Spring Icons” Collaboration Jackets</a></h6>
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
                                                    <span>$200-$280</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-24.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Taffy Candy Laff Bites Net 4.2 oz</a></h6>
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
                                                    <span>$105-$150</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <div class="product__item product__item-d">
                                            <div class="product__thumb fix">
                                                <div class="product-image w-img">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/tp-26.jpg" alt="product">
                                                    </a>
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
                                            <div class="product__content-3">
                                                <h6><a href="product-details.html">Vinh Long Fresh Mangosteen 500g</a></h6>
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
                                                    <span>$110-$120</span>
                                                </div>
                                            </div>
                                            <div class="product__add-cart-s text-center">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="FiveCol" role="tabpanel" aria-labelledby="FiveCol-tab">
                            <div class="tp-wrapper-2">
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-1.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Classic Leather Backpack Daypack 2022</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$220.00 - <del> $240.00</del></h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-2.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Samsang Galaxy A70 128GB Dual-SIM</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$216.00</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-3.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Coffee Maker AH240a Full Function</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$125.00</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-4.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Imported Wooden Felt Cushion Chair</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$160.00</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-5.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Sunhouse Decorative Lights – Imported</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$125.00</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-6.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">Korea Stainless Steel Pot Set 5 Piecs</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$99</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/samsung-a12.png" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">HP Stainless Steel Hot Water Bottle</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$125.00</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item-pd">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9">
                                            <div class="single-features-item single-features-item-df b-radius mb-20">
                                                <div class="row  g-0 align-items-center">
                                                    <div class="col-md-4">
                                                        <div class="features-thum">
                                                            <div class="features-product-image w-img">
                                                                <a href="product-details.html"><img src="assets/img/product/sm-8.jpg" alt=""></a>
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
                                                    <div class="col-md-8">
                                                        <div class="product__content product__content-d">
                                                            <h6><a href="product-details.html">The North Face Womens Resolve 2 Jack</a></h6>
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
                                                            <div class="features-des">
                                                                <ul>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                                                    <li><a href="product-details.html"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="product-stock mb-15">
                                                <h5>Availability: <span> 940 in stock</span></h5>
                                                <h6>$140.00</h6>
                                            </div>
                                            <div class="stock-btn ">
                                                <button type="button" class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                Masukkan Keranjang
                                                </button>
                                                <button type="button" class="wc-checkout d-flex align-items-center justify-content-center w-100" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                    Lihat Sekilas
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-pagination text-center">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="basic-pagination pt-30 pb-30">
                                    <nav>
                                       <ul>
                                          <li>
                                             <a href="shop.html" class="active">1</a>
                                          </li>
                                          <li>
                                             <a href="shop.html">2</a>
                                          </li>
                                          <li>
                                             <a href="shop.html">3</a>
                                          </li>
                                         <li>
                                            <a href="shop.html">5</a>
                                         </li>
                                         <li>
                                            <a href="shop.html">6</a>
                                         </li>
                                          <li>
                                             <a href="shop.html">
                                                <i class="fal fa-angle-double-right"></i>
                                             </a>
                                          </li>
                                       </ul>
                                     </nav>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-area-end -->

</main>
@endsection

<!-- Section for adding script js -->    
@section('script')
<script src="{{ asset('assets/js/main.js')}}"></script>
<script src="{{ asset('assets/js/ui-slider-range.js')}}"></script>
    @endsection