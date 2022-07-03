@extends('main.master')
<!-- Section for adding css -->
@section('css')

@endsection

<!-- Section for adding content page -->
@section('isi')
 <main>
    <!-- page-banner-area-start -->
    <!-- page-banner-area-end -->

    <!-- coupon-area-start -->
    <section class="coupon-area pt-120 pb-30">
        <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                    <div class="coupon-info">
                        <p class="coupon-text">Silahkan masukan username dan password.</p>
                        <form action="#">
                                <p class="form-row-first">
                                <label>Username or email <span class="required">*</span></label>
                                <input type="text">
                                </p>
                                <p class="form-row-last">
                                <label>Password <span class="required">*</span></label>
                                <input type="text">
                                </p>
                                <p class="form-row">
                                <button class="tp-btn-h1" type="submit">Login</button>
                                <label>
                                    <input type="checkbox">
                                    Remember me
                                </label>
                                </p>
                                <p class="lost-password">
                                <a href="#">Lost your password?</a>
                                </p>
                        </form>
                    </div>
                    </div>
                    <!-- ACCORDION END -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                    <div class="coupon-info">
                        <form action="#">
                                <p class="checkout-coupon">
                                <input type="text" placeholder="Coupon Code">
                                <button class="tp-btn-h1" type="submit">Apply Coupon</button>
                                </p>
                        </form>
                    </div>
                    </div>
                    <!-- ACCORDION END -->
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- coupon-area-end -->

    <!-- checkout-area-start -->
    <section class="checkout-area pb-85">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Note</label>
                                        <input type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Alamat <span class="required">*</span></label>
                                        <input type="text" placeholder="Alamat Jalan">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Pilih Kurir<span class="required"> *</span></label>
                                        <select class="kurir" name="kolam" id="kolom">
                                            <option selected="" disabled="">Jenis Kurir</option>
                                                              <option value="1">
                                              JNT                 </option>
                                                                <option value="2">
                                              SI CEPAT                 </option>
                                                                <option value="3">
                                              JNE                  </option>
                                                                <option value="5">
                                              POS                  </option>
                                                            </select>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="tp-btn-h1">Submit</button>
                                    </div>

                                <div id="ship-box-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order mb-30 ">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$165.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$50.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">$215.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>
                                                            Flat Rate: <span class="amount">$7.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>Free Shipping:</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">$215.00</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method">
                                <div class="accordion" id="checkoutAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="checkoutOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                        Direct Bank Transfer
                                        </button>
                                    </h2>
                                    <div id="bankOne" class="accordion-collapse collapse show" aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                         <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="paymentTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                        Cheque Payment
                                        </button>
                                    </h2>
                                    <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="paypalThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                        PayPal
                                        </button>
                                    </h2>
                                    <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree" data-bs-parent="#checkoutAccordion">
                                        <div class="accordion-body">
                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                            PayPal account.</p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                <button type="submit" class="tp-btn-h1">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area-end -->


</main>

@endsection

<!-- Section for adding script js -->
@section('script')

    @endsection
