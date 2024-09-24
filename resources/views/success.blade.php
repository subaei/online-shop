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
                        <li>Order Success</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- checkout area start -->
<div class="checkout-area mt-50px mb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>Thank You. Your Order Has Been Received</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>
                                        Mohammed Alsubaei
                                        <br>
                                        <span>Omdurman Kabjab St</span>
                                        <br>
                                        <span>Algamayr Block 1</span>
                                        <br>
                                        <span>Phone: +249117311231</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">
                                        <span>Order Number</span>
                                        <br>
                                        29
                                    </li>
                                    <li class="order-total">
                                        <span>Order Date</span>
                                        <br>
                                        13-09-2024
                                    </li>
                                    <li class="order-total text-info">
                                        <span>Total</span>
                                        <br>
                                        $2400.00
                                    </li>
                                    <li class="order-total">
                                        <span>Payment Method</span>
                                        <br>
                                        Stripe
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="payment-method row">
                            <div class="col-lg-6 mt-md-30px mt-30px ">
                                <div class="your-order-area">
                                    <h3>Order Details</h3>
                                    <div class="gray-bg-4">
                                        <div class="your-order-product-info">
                                            <div class="your-order-bottom" style="margin-bottom: 10px;">
                                                <ul>
                                                    <li>Subtotal</li>
                                                    <li>$2400.00</li>
                                                </ul>
                                            </div>
                                            <div class="your-order-bottom" style="margin-bottom: 10px;">
                                                <ul>
                                                    <li>Discount</li>
                                                    <li>00.00</li>
                                                </ul>
                                            </div>
                                            <div class="your-order-bottom">
                                                <ul>
                                                    <li>Shipping</li>
                                                    <li>00.00</li>
                                                </ul>
                                            </div>
                                            <div class="your-order-total">
                                                <ul>
                                                    <li class="order-total">Total</li>
                                                    <li>$2400.00</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-25">
                                        <a wire:navigate class="primary-btn" href="/shop">Go Back Shopping</a>
                                        <a wire:navigate class="info-btn" href="my-orders">View My Orders</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-md-30px mt-30px ">
                                <div class="static-area">
                                    <div class="single-static">
                                        <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive">
                                        <div class="single-static-meta">
                                            <h4>Shipping</h4>
                                            <p>Delivery with 24 hours</p>
                                        </div>
                                        <h3>00.00</h3>
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
<!-- checkout area end -->

@endsection