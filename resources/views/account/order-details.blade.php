@extends('layouts.app')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="/">Home</a></li>
                        <li>My Accounts</li>
                        <li>Order Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- Static Area Start -->
<div class="static-area mtb-50px">
    <div class="container">
        <h3 class="cart-page-title">Order Details</h3>
        <div class="static-area-wrap">
            <div class="row">
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                    <div class="single-static">
                        <img src="{{ asset('assets/images/icons/static-icons-1.png') }}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Free Shipping</h4>
                            <p>On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                    <div class="single-static">
                        <img src="{{ asset('assets/images/icons/static-icons-2.png') }}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Free Returns</h4>
                            <p>Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                    <div class="single-static">
                        <img src="{{ asset('assets/images/icons/static-icons-3.png') }}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>100% Payment Secure</h4>
                            <p>Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 ">
                    <div class="single-static">
                        <img src="{{ asset('assets/images/icons/static-icons-4.png') }}" alt="" class="img-responsive" />
                        <div class="single-static-meta">
                            <h4>Support 24/7</h4>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Static Area End -->

<!-- cart area start -->
<div class="cart-main-area mtb-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a wire:navigate  href="#"><img class="img-responsive" src="{{ asset('assets/images/popular-image/2-1.jpg') }}" alt="" /></a>
                                    </td>
                                    <td class="product-name"><a wire:navigate href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                    <td class="product-subtotal">1</td>
                                    <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a wire:navigate  href="#"><img class="img-responsive" src="{{ asset('assets/images/popular-image/2-2.jpg') }}" alt="" /></a>
                                    </td>
                                    <td class="product-name"><a wire:navigate href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                    <td class="product-subtotal">2</td>
                                    <td class="product-price-cart"><span class="amount">$100.00</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="grand-totall">
                    <div class="title-wrap">
                        <h4 class="cart-bottom-title section-bg-gary-cart">Shipping Address</h4>
                    </div>
                    <div class="total-shipping my-total-shipping">
                        <h5>Kabajab St Algamayr Block 1</h5>
                        <h5 style="float: right;">+249117311231</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12  col-12">
                <div class="grand-totall">
                    <div class="title-wrap">
                        <h4 class="cart-bottom-title section-bg-gary-cart">Summary</h4>
                    </div>
                    <div class="total-shipping my-total-shipping">
                        <h5>Subtotal</h5>
                        <h5 style="float: right;">$240.00</h5>
                    </div>
                    <div class="total-shipping my-total-shipping">
                        <h5>Tax</h5>
                        <h5 style="float: right;">$00.00</h5>
                    </div>
                    <div class="total-shipping my-total-shipping" style="border-bottom: 1px solid #d5d5d5;padding-bottom: 15px;">
                        <h5>Shipping</h5>
                        <h5 style="float: right;">$00.00</h5>
                    </div>
                    <h5>Total <span>$240.00</span></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart area end -->

@endsection