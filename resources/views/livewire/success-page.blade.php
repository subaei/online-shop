<div>
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
                        <h3>Thank You. Your order has been received</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>
                                            {{ $order->address->full_name }}
                                            <br>
                                            <span>{{ $order->address->street_address }}</span>
                                            <br>
                                            <span>{{ $order->address->city }}, {{ $order->address->state }}, {{ $order->address->zip_code }}</span>
                                            <br>
                                            <span>Phone: {{ $order->address->phone }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">
                                            <span>Order Number</span>
                                            <br>
                                            {{ $order->address->id }}
                                        </li>
                                        <li class="order-total">
                                            <span>Order Date</span>
                                            <br>
                                            {{ $order->address->created_at->format('d-m-Y') }}
                                        </li>
                                        <li class="order-total text-info">
                                            <span>Total</span>
                                            <br>
                                            {{ Number::currency($order->grand_total) }}
                                        </li>
                                        <li class="order-total">
                                            <span>Payment Method</span>
                                            <br>
                                            {{ $order->payment_method == 'cod' ? 'Cash on Delivery' : 'Card' }}
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
                                                        <li>{{ Number::currency($order->grand_total) }}</li>
                                                    </ul>
                                                </div>
                                                <div class="your-order-bottom" style="margin-bottom: 10px;">
                                                    <ul>
                                                        <li>Discount</li>
                                                        <li>{{ Number::currency(0) }}</li>
                                                    </ul>
                                                </div>
                                                <div class="your-order-bottom">
                                                    <ul>
                                                        <li>Shipping</li>
                                                        <li>{{ Number::currency(0) }}</li>
                                                    </ul>
                                                </div>
                                                <div class="your-order-total your-order-success-total">
                                                    <ul>
                                                        <li class="order-total">Total</li>
                                                        <li>{{ Number::currency($order->grand_total) }}</li>
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
                                            <h3>{{ Number::currency(0) }}</h3>
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
</div>
