@extends('main.master')
<!-- Section for adding css -->
@section('css')

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

        <!-- product-details-start -->
        <div class="product-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product__details-nav d-sm-flex align-items-start">
                            <ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
                                
                            </ul>
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productThumbContent">
                                    <div class="tab-pane fade show active" id="thumbOne" role="tabpanel" aria-labelledby="thumbOne-tab">
                                        <div class="product__details-nav-thumb w-img">
                                            <img src="{{ asset('assets/img/product/nav/product-nav-big-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="thumbTwo" role="tabpanel" aria-labelledby="thumbTwo-tab">
                                        <div class="product__details-nav-thumb w-img">
                                            <img src="{{ asset('assets/img/product/nav/product-nav-big-3.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="thumbThree" role="tabpanel" aria-labelledby="thumbThree-tab">
                                        <div class="product__details-nav-thumb w-img">
                                            <img src="{{ asset('assets/img/product/nav/product-nav-big-2.jpg') }}" alt="">
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product__details-content">
                            <h6>Samsung Galaxy A12, 32GB, Black – (Locked)</h6>
                            <div class="pd-rating mb-10">
                                <ul class="rating">
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                </ul>
                                <span>(01 review)</span>
                                <span><a href="#">Add your review</a></span>
                            </div>
                            <div class="price mb-10">
                                <span>$216.00</span>
                            </div>
                            <div class="features-des mb-20 mt-10">
                                <ul>
                                    <li><a href="{{ url("/marketplace/shop/product-detail") }}"><i class="fas fa-circle"></i> Bass and Stereo Sound.</a></li>
                                    <li><a href="{{ url("/marketplace/shop/product-detail") }}"><i class="fas fa-circle"></i> Display with 3088 x 1440 pixels resolution.</a></li>
                                    <li><a href="{{ url("/marketplace/shop/product-detail") }}"><i class="fas fa-circle"></i> Memory, Storage &amp; SIM: 12GB RAM, 256GB.</a></li>
                                    <li><a href="{{ url("/marketplace/shop/product-detail") }}"><i class="fas fa-circle"></i> Androi v10.0 Operating system.</a></li>
                                </ul>
                            </div>
                            <div class="product-stock mb-20">
                                <h5>Availability: <span> 940 in stock</span></h5>
                            </div>
                            <div class="cart-option mb-15">
                                <div class="product-quantity mr-20">
                                    <div class="cart-plus-minus p-relative"><input type="text" value="1"><div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                                </div>
                                <a href="cart.html" class="cart-btn">Add to Cart</a>
                            </div>
                            <div class="details-meta">
                                <div class="d-meta-left">
                                    <div class="dm-item mr-20">
                                        <a href="{{ url("/marketplace/wishlist") }}"><i class="fal fa-heart"></i>Add to wishlist</a>
                                    </div>
                                    <div class="dm-item">
                                        <a href="#"><i class="fal fa-layer-group"></i>Compare</a>
                                    </div>
                                </div>
                                <div class="d-meta-left">
                                    <div class="dm-item">
                                        <a href="#"><i class="fal fa-share-alt"></i>Share</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tag-area mt-15">
                                <div class="product_info">
                                    <span class="sku_wrapper">
                                        <span class="title">SKU:</span>
                                        <span class="sku">DK1002</span>
                                    </span>
                                    <span class="posted_in">
                                        <span class="title">Categories:</span>
                                        <a href="#">iPhone</a>
                                        <a href="#">Tablets</a>
                                    </span>
                                    <span class="tagged_as">
                                        <span class="title">Tags:</span>
                                        <a href="#">Smartphone</a>,
                                        <a href="#">Tablets</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details-end -->

        <!-- product-details-des-start -->
        <div class="product-details-des mt-40 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="product__details-des-tab">
                            <ul class="nav nav-tabs" id="productDesTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="des-tab" data-bs-toggle="tab" data-bs-target="#des" type="button" role="tab" aria-controls="des" aria-selected="true">Description </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="aditional-tab" data-bs-toggle="tab" data-bs-target="#aditional" type="button" role="tab" aria-controls="aditional" aria-selected="false">Additional information</button>
                                  </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews (1) </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="prodductDesTaContent">
                    <div class="tab-pane fade active show" id="des" role="tabpanel" aria-labelledby="des-tab">
                        <div class="product__details-des-wrapper">
                            <p class="des-text mb-35">Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.</p>
                            <h6 class="des-sm-title">The standard passage, used since the 1500s.</h6>
                            <p class="des-text mb-35">A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="features-des-image text-center">
                                <img src="{{ asset('assets/img/features-product/product-content-1.jpg') }}" alt="">
                            </div>
                            <div class="product-des-section mb-90">
                                <h5 class="des-section mb-30">Get 30% Daily Cash
                                  <br>  Back with Membership Card.</h5>
                                  <p>A new collection of lounge furniture, occasional tables and a stool by Edward Barber & Jay Osgerby offers a relaxed, contemporary attitude toward interior design. The lounge furniture includes four individualized sized sofas, and three complementary ottomans. Available in a range of upholstery fabrics and leathers, the lounge furniture is distinguished by stitched seams that reinforce its architectural profile, softened by the curvature of cushions on each face range of upholstery fabrics and leathers.</p>
                            </div>
                            <div class="row mb-80">
                                <div class="col-xl-6">
                                    <div class="des-single mb-30 text-center">
                                        <div class="features-des-image text-center">
                                            <img src="{{ asset('assets/img/features-product/product-content-2.jpg') }}" alt="">
                                        </div>
                                        <h5 class="des-section">Get 30% Daily Cash
                                            <br>  Back with Membership Card.</h5>
                                        <p>Sit amet conse ctetur adipisicing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore  magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="des-single text-center mb-30">
                                        <div class="features-des-image">
                                            <img src="{{ asset('assets/img/features-product/product-content-3.jpg') }}" alt="">
                                        </div>
                                        <h5 class="des-section text-center">Get 70% Daily Cash
                                            <br>  Back with Membership Card.</h5>
                                        <p>Sit amet conse ctetur adipisicing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore  magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="features-des-image features-des-image-2 text-center mb-50 w-img">
                                <img src="{{ asset('assets/img/features-product/product-content-4.jpg') }}" alt="">
                            </div>
                            <div class="des-sm-features">
                                <div class="des-sm-fet text-center mb-30">
                                    <img src="{{ asset('assets/img/features-product/product-content-5.jpg') }}" alt="">
                                    <span>Ultra Wide Angle</span>
                                </div>
                                <div class="des-sm-fet text-center mb-30">
                                    <img src="{{ asset('assets/img/features-product/product-content-6.jpg') }}" alt="">
                                    <span>Live Focus On</span>
                                </div>
                            </div>
                            <p class="des-text mb-35">Designed by Puik in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging. A light chair easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                            <h6 class="des-sm-title">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC.</h6>
                            <p class="des-text mb-25">Sound of Marshall, unplugs the chords, and takes the show on the road. Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="aditional" role="tabpanel" aria-labelledby="aditional-tab">
                        <div class="product__desc-info">
                            <ul>
                               <li>
                                  <h6>Weight</h6>
                                  <span>2 lbs</span>
                               </li>
                               <li>
                                  <h6>Dimensions</h6>
                                  <span>12 × 16 × 19 in</span>
                               </li>
                               <li>
                                  <h6>Product</h6>
                                  <span>Purchase this product on rag-bone.com</span>
                               </li>
                               <li>
                                  <h6>Color</h6>
                                  <span>Gray, Black</span>
                               </li>
                               <li>
                                  <h6>Size</h6>
                                  <span>S, M, L, XL</span>
                               </li>
                               <li>
                                  <h6>Model</h6>
                                  <span>Model	</span>
                               </li>
                               <li>
                                  <h6>Shipping</h6>
                                  <span>Standard shipping: $5,95</span>
                               </li>
                               <li>
                                  <h6>Care Info</h6>
                                  <span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
                               </li>
                               <li>
                                  <h6>Brand</h6>
                                  <span>Kazen</span>
                               </li>
                            </ul>
                         </div>
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="product__details-review">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="review-rate">
                                        <h5>5.00</h5>
                                        <div class="review-star">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </div>
                                        <span class="review-count">01 Review</span>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="review-des-infod">
                                        <h6>1 review for "<span>Wireless Bluetooth Over-Ear Headphones</span>"</h6>
                                        <div class="review-details-des">
                                            <div class="author-image mr-15">
                                                <a href="#"><img src="assets/img/author/author-sm-1.jpeg" alt=""></a>
                                            </div>
                                            <div class="review-details-content">
                                                <div class="str-info">
                                                    <div class="review-star mr-15">
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                    </div>
                                                    <div class="add-review-option">
                                                        <a href="#">Add Review</a>
                                                    </div>
                                                </div>
                                                <div class="name-date mb-30">
                                                    <h6> admin – <span> May 27, 2021</span></h6>
                                                </div>
                                                <p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__details-comment ">
                                        <div class="comment-title mb-20">
                                           <h3>Add a review</h3>
                                           <p>Your email address will not be published. Required fields are marked *</p>
                                        </div>
                                        <div class="comment-rating mb-20">
                                           <span>Overall ratings</span>
                                           <ul>
                                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                                              <li><a href="#"><i class="fas fa-star"></i></a></li>
                                           </ul>
                                        </div>
                                        <div class="comment-input-box">
                                           <form action="#">
                                              <div class="row">
                                                <div class="col-xxl-6 col-xl-6">
                                                    <div class="comment-input">
                                                       <input type="text" placeholder="Your Name">
                                                    </div>
                                                 </div>
                                                 <div class="col-xxl-6 col-xl-6">
                                                    <div class="comment-input">
                                                       <input type="email" placeholder="Your Email">
                                                    </div>
                                                 </div>
                                                 <div class="col-xxl-12">
                                                       <textarea placeholder="Your review" class="comment-input comment-textarea"></textarea>
                                                 </div>
                                                 <div class="col-xxl-12">
                                                    <div class="comment-agree d-flex align-items-center mb-25">
                                                       <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                           Save my name, email, and website in this browser for the next time I comment.
                                                          </label>
                                                        </div>
                                                    </div>
                                                 </div>
                                                 <div class="col-xxl-12">
                                                    <div class="comment-submit">
                                                       <button type="submit" class="cart-btn">Submit</button>
                                                    </div>
                                                 </div>
                                              </div>
                                           </form>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details-des-end -->



    </main>
    @endsection

<!-- Section for adding script js -->
@section('script')

    @endsection
