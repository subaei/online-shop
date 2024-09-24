<div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a wire:navigate href="/">Home</a></li>
                            <li><a wire:navigate href="/my-orders">My Orders</a></li>
                            <li>My Order Details Page</li>
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
                        <i class="lnr lnr-users"></i>
                        <div class="single-static-meta">
                            <h4>CUSTOMER</h4>
                            <p>{{ $address->full_name }}</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                    <div class="single-static">
                        <i class="lnr lnr-calendar-full"></i>
                        <div class="single-static-meta">
                            <h4>ORDER DATE</h4>
                            <p>{{ $order->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                @php
                    $status = '';
                    $payment_status = '';
                    if ($order->status == 'new') {
                        $status = '<span class="amount badge-info">New</span>';
                    }
                    if ($order->status == 'processing') {
                        $status = '<span class="amount badge-warning">Processing</span>';
                    }
                    if ($order->status == 'shipped') {
                        $status = '<span class="amount badge-success">Shipped</span>';
                    }
                    if ($order->status == 'delivered') {
                        $status = '<span class="amount badge-done">Delivered</span>';
                    }
                    if ($order->status == 'canceled') {
                        $status = '<span class="amount badge-danger">Canceled</span>';
                    }
                    // payment status
                    if ($order->payment_status == 'pending') {
                        $payment_status = '<span class="amount badge-info">Pending</span>';
                    }
                    if ($order->payment_status == 'paid') {
                        $payment_status = '<span class="amount badge-done">Paid</span>';
                    }
                    if ($order->payment_status == 'canceled') {
                        $payment_status = '<span class="amount badge-danger">Canceled</span>';
                    }
                @endphp
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                    <div class="single-static">
                        <i class="lnr lnr-briefcase"></i>
                        <div class="single-static-meta">
                            <h4>ORDER STATUS</h4>
                            <p>{!! $status !!}</p>
                        </div>
                    </div>
                </div>
                <!-- Static Single Item End -->
                <!-- Static Single Item Start -->
                <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 ">
                    <div class="single-static">
                        <i class="lnr lnr-frame-expand"></i>
                        <div class="single-static-meta">
                            <h4>PAYMENT STATUS</h4>
                            <p>{!! $payment_status !!}</p>
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
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order_items as $item)
                                <tr wire:key='{{ $item->id }}'>
                                    <td class="product-thumbnail">
                                        <a wire:navigate  href="#" style="display: flex; justify-content: center;">
                                            <img class="img-responsive" src="{{ url('storage', $item->product->images[0]) }}" alt="{{ $item->product->name }}" width="50" />
                                        </a>
                                    </td>
                                    <td class="product-name"><a wire:navigate href="/product-details/{{ $item->product->slug }}">{{ $item->product->name }}</a></td>
                                    <td class="product-price-cart"><span class="amount">{{ Number::currency($item->unit_amount) }}</span></td>
                                    <td class="product-subtotal">{{ $item->quantity }}</td>
                                    <td class="product-price-cart"><span class="amount">{{ Number::currency($item->total_amount) }}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                <div class="grand-totall">
                    <div class="title-wrap">
                        <h4 class="cart-bottom-title section-bg-gary-cart">Shipping Address</h4>
                    </div>
                    <div class="total-shipping my-total-shipping">
                        <h5>{{ $address->street_address }}, {{ $address->city }}, {{ $address->state }}, {{ $address->zip_code }}</h5>
                        <h5><span class="text-bold" style="float: left;">Phone</span> <br> {{ $address->phone }}</h5>
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
                        <h5 style="float: right;">{{ Number::currency($item->order->grand_total) }}</h5>
                    </div>
                    <div class="total-shipping my-total-shipping">
                        <h5>Tax</h5>
                        <h5 style="float: right;">{{ Number::currency(0) }}</h5>
                    </div>
                    <div class="total-shipping my-total-shipping" style="border-bottom: 1px solid #d5d5d5;padding-bottom: 15px;">
                        <h5>Shipping</h5>
                        <h5 style="float: right;">{{ Number::currency(0) }}</h5>
                    </div>
                    <h5>Total <span>{{ Number::currency($item->order->grand_total) }}</span></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart area end -->
</div>
