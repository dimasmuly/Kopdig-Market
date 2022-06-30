<!-- calling the main part --> 
@extends('main.master')

<!-- Section for adding css -->    
@section('css')

@endsection

<!-- Section for adding content page -->    
@section('isi')
<main>
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height" data-background="assets/img/banner/page-banner-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">Order Tracking</h4>
                        <div class="breadcrumb-two">
                            <nav>
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="breadcrumb-menu">
                                        <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                        </li>
                                        <li class="trail-item">
                                            <span>Order Tracking</span>
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

    <br>
    <br>
    <!-- ordertrack -->
    <div class="container">
        <article class="card">
            <span class="card-header"> My Orders / Tracking </span>
            <div class="card-body">
                <h6>Order ID: OD45345345435</h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br>4 June 2022 </div>
                        <div class="col"> <strong>Shipping BY:</strong> <br> NILA, | <i class="fa fa-phone"></i>
                            +622223949865</div>
                        <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                        <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                    </div>
                </article>
                <section class="features__area pt-20">
                    <div class="container">
                        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                            <div class="col">
                                <div class="features__item d-flex white-bg">
                                    <div class="features__icon mr-20">
                                        <i class="fal fa-check"></i>
                                    </div>
                                    <div class="features__content">
                                        <h6>Order Confirmed</h6>
                                        <p>Done</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="features__item d-flex white-bg">
                                    <div class="features__icon mr-20">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="features__content">
                                        <h6>Picked By Courier</h6>
                                        <p>Process</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="features__item d-flex white-bg">
                                    <div class="features__icon mr-20">
                                        <i class="fal fa-truck"></i>
                                    </div>
                                    <div class="features__content">
                                        <h6>On The Way</h6>
                                        <p>Not Yet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="features__item features__item-last d-flex white-bg">
                                    <div class="features__icon mr-20">
                                        <i class="fa fa-box"></i>
                                    </div>
                                    <div class="features__content">
                                        <h6>Ready For Pickup</h6>
                                        <p>Not Yet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
            <section class="banner__area pt-20 pb-10">
                <div class="container">
                    <section class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="product-details.html"><img src="assets/img/features-product/fp-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="product-details.html">Epple Watch SE Gold Aluminum</a></h6>
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
                                                <span>$307.00 <del>$110</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="product-details.html"><img src="assets/img/features-product/fp-1.jpg" alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-15%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
                                            <h6><a href="product-details.html">Epple Watch SE Gold Aluminum</a></h6>
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
                                                <span>$307.00 <del>$110</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-features-item b-radius mb-20">
                                <div class="row  g-0 align-items-center">
                                    <div class="col-6">
                                        <div class="features-thum">
                                            <div class="features-product-image w-img">
                                                <a href="product-details.html"><img src="assets/img/features-product/fp-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="product__offer">
                                                <span class="discount">-5%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="product__content product__content-d">
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
                                            <div class="price d-price">
                                                <span>$307.00 <del>$110</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    
               
                <hr>
                <a href="#" class="btn btn-primary" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
            </div>
        </article>
    </div>
    <!-- ordertrackenh -->



</main>
@endsection

<!-- Section for adding script js -->    
@section('script')

    @endsection