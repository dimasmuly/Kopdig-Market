 <!-- header-start -->
 <header class="header d-blue-bg">
    <div class="header-top">
        <div class="container">
            <div class="header-inner">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="header-inner-start">
                            <div class="header__currency border-right">
                                <div class="support s-name">
                                    <p>Butuh Bantuan? <a href="https://wa.me/6287872875432">(+62) 87872875432</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                        <div class="header-inner-end text-md-end">
                            <div class="ovic-menu-wrapper">
                                <ul>
                                    <li><a href="about.html">Tentang Kami</a></li>
                                    <li><a href="{{ url("/marketplace/lacak_pesanan") }}">Lacak pesanan</a></li>
                                    <li><a href="contact.html">Hubungi kami</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="container">
            <div class="heade-mid-inner">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="header__info">
                            <div class="logo">
                                <a href="{{ url("/marketplace") }}" class="logo-image"><img src="{{ asset('assets/img/logo-putih.png')}}" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="header__search">
                            <form action="#">
                                <div class="header__search-box">
                                    <input class="search-input" type="text" placeholder="I'm shopping for...">
                                    <button class="button" type="submit"><i class="far fa-search"></i></button>
                                </div>
                                <div class="header__search-cat">
                                    <select>
                                        <option>All Categories</option>
                                        <option>Best Seller Products</option>
                                        <option>Top 10 Offers</option>
                                        <option>New Arrivals</option>
                                        <option>Phones &amp; Tablets</option>
                                        <option>Electronics &amp; Digital</option>
                                        <option>Fashion &amp; Clothings</option>
                                        <option>Jewelry &amp; Watches</option>
                                        <option>Health &amp; Beauty</option>
                                        <option>Sound &amp; Speakers</option>
                                        <option>TV &amp; Audio</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                        <div class="header-action">
                            <div class="block-userlink">
                                <a class="icon-link" href="{{ url("/marketplace/profile") }}">
                                <i class="flaticon-user"></i>
                                <span class="text">
                                <span class="sub">Login </span>
                                My Account </span>
                                </a>
                            </div>
                            <div class="block-wishlist action">
                                <a class="icon-link" href="{{ url("/marketplace/wishlist") }}">
                                <i class="flaticon-heart"></i>
                                <span class="count">0</span>
                                <span class="text">
                                <span class="sub">Favorite</span>
                                My Wishlist </span>
                                </a>
                            </div>
                            <div class="block-cart action">
                                <a class="icon-link" href="{{ url("/marketplace/keranjang") }}">
                                <i class="flaticon-shopping-bag"></i>
                                <span class="count">0</span>
                                <span class="text">
                                <span class="sub">Keranjang Anda:</span>
                                $00.00 </span>
                                </a>
                                <div class="cart">
                                    <div class="cart__mini">
                                        <ul>
                                            <li>
                                              <div class="cart__title">
                                                <h4>Your Cart</h4>
                                                <span>(0 Item in Cart)</span>
                                              </div>
                                            </li>
                                            <li><!-- for adding wishlist / keranjang
                                              <div class="cart__item d-flex justify-content-between align-items-center">
                                                <div class="cart__inner d-flex">
                                                  <div class="cart__thumb">
                                                    <a href="product-details.html">
                                                      <img src="assets/img/cart/20.jpg" alt="">
                                                    </a>
                                                  </div>
                                                  <div class="cart__details">
                                                    <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                    <div class="cart__price">
                                                      <span>$255.00</span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="cart__del">
                                                    <a href="#"><i class="fal fa-times"></i></a>
                                                </div>
                                              </div> -->
                                            </li>
                                            <li>
                                                <!-- for adding sub total keranjang
                                              <div class="cart__sub d-flex justify-content-between align-items-center">
                                                <h6>Subtotal</h6>
                                                <span class="cart__sub-total">$255.00</span>
                                              </div>-->
                                            </li>
                                            <li>
                                                <a href="{{ url("/marketplace/keranjang") }}" class="wc-cart mb-10">View cart</a>
                                                <a href="{{ url("/marketplace/bayar") }}" class="wc-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-lg-3">
                    <div class="cat__menu-wrapper side-border d-none d-lg-block">
                        <div class="cat-toggle">
                            <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i class="fal fa-bars"></i> Shop by department</button>
                            <div class="cat__menu">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="shop.html">Semua Kategori <i class="far fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li><a href="shop.html">Halaman Belanja</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Standard SHop Page</a></li>
                                                        <li><a href="product-details.html">Shop Right Sidebar</a></li>
                                                        <li><a href="product-details.html">Shop Left Sidebar</a></li>
                                                        <li><a href="product-details.html">Shop 3 Column</a></li>
                                                        <li><a href="product-details.html">Shop 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Product Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                        <li><a href="product-details.html">Product V2</a></li>
                                                        <li><a href="product-details.html">Product V3</a></li>
                                                        <li><a href="product-details.html">Varriable Product</a></li>
                                                        <li><a href="product-details.html">External Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Other Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">wishlist</a></li>
                                                        <li><a href="product-details.html">Shopping Cart</a></li>
                                                        <li><a href="product-details.html">Checkout</a></li>
                                                        <li><a href="product-details.html">Login</a></li>
                                                        <li><a href="product-details.html">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Catagory 1</a></li>
                                                        <li><a href="product-details.html">Catagory 2</a></li>
                                                        <li><a href="product-details.html">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Catagory 1</a></li>
                                                        <li><a href="product-details.html">Catagory 2</a></li>
                                                        <li><a href="product-details.html">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Phone and Electronics <i class="far fa-angle-down"></i></a>
                                            <ul class="mega-menu mega-menu-2">
                                                <li><a href="shop.html">Shop Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Standard SHop Page</a></li>
                                                        <li><a href="product-details.html">Shop Right Sidebar</a></li>
                                                        <li><a href="product-details.html">Shop Left Sidebar</a></li>
                                                        <li><a href="product-details.html">Shop 3 Column</a></li>
                                                        <li><a href="product-details.html">Shop 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Product Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                        <li><a href="product-details.html">Product V2</a></li>
                                                        <li><a href="product-details.html">Product V3</a></li>
                                                        <li><a href="product-details.html">Varriable Product</a></li>
                                                        <li><a href="product-details.html">External Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Other Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">wishlist</a></li>
                                                        <li><a href="product-details.html">Shopping Cart</a></li>
                                                        <li><a href="product-details.html">Checkout</a></li>
                                                        <li><a href="product-details.html">Login</a></li>
                                                        <li><a href="product-details.html">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Catagory 1</a></li>
                                                        <li><a href="product-details.html">Catagory 2</a></li>
                                                        <li><a href="product-details.html">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Catagory 1</a></li>
                                                        <li><a href="product-details.html">Catagory 2</a></li>
                                                        <li><a href="product-details.html">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Best Seller Products
                                                <span class="cat-label">hot!</span>
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <ul class="mega-menu">
                                                <li><a href="shop.html">Shop Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Standard SHop Page</a></li>
                                                        <li><a href="product-details.html">Shop Right Sidebar</a></li>
                                                        <li><a href="product-details.html">Shop Left Sidebar</a></li>
                                                        <li><a href="product-details.html">Shop 3 Column</a></li>
                                                        <li><a href="product-details.html">Shop 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Product Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                        <li><a href="product-details.html">Product V2</a></li>
                                                        <li><a href="product-details.html">Product V3</a></li>
                                                        <li><a href="product-details.html">Varriable Product</a></li>
                                                        <li><a href="product-details.html">External Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Other Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">wishlist</a></li>
                                                        <li><a href="product-details.html">Shopping Cart</a></li>
                                                        <li><a href="product-details.html">Checkout</a></li>
                                                        <li><a href="product-details.html">Login</a></li>
                                                        <li><a href="product-details.html">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Catagory 1</a></li>
                                                        <li><a href="product-details.html">Catagory 2</a></li>
                                                        <li><a href="product-details.html">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="product-details.html">Catagory 1</a></li>
                                                        <li><a href="product-details.html">Catagory 2</a></li>
                                                        <li><a href="product-details.html">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop.html">Top 10 Offers
                                                <span class="cat-label green">new!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop.html">New Arrivals <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="shop.html">Home Appliances</a></li>
                                                <li><a href="shop.html">Technology</a>
                                                    <ul class="submenu">
                                                        <li><a href="shop.html">Storage Devices</a></li>
                                                        <li><a href="shop.html">Monitors</a></li>
                                                        <li><a href="shop.html">Laptops</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop.html">Office Equipments</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">TV &amp; Audio</a></li>
                                        <li><a href="shop.html">Electronics &amp; Digital</a></li>
                                        <li class="d-laptop-none"><a href="shop.html">Fashion &amp; Clothings</a></li>
                                        <li class="d-laptop-none"><a href="shop.html">Jewelry &amp; Watches</a></li>
                                        <li><a href="shop.html">Health &amp; Beauty</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-3">
                  <div class="header__bottom-left d-flex d-xl-block align-items-center">
                    <div class="side-menu d-lg-none mr-20">
                      <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                    </div>
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ url("/marketplace") }}" class="active">Home </a>
                                </li>
                                <li class="has-mega"><a href="{{ url("/marketplace/shop") }}">Belanja</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                  </div>
                </div><!-- adding an ads for invest
                <div class="col-lg-3 col-md-6 col-9">
                    <div class="shopeing-text text-sm-end">
                        <p>Spend $120 more and get free shipping!</p>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
