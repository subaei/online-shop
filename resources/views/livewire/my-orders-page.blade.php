<div>
    <!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="/">Home</a></li>
                        <li>My Accounts</li>
                        <li>My Orders</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- cart area start -->
<div class="cart-main-area mtb-50px">
    <div class="container">
        <h3 class="cart-page-title">My Orders List</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-content table-responsive cart-table-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
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
                            <tr wire:key='{{ $order->id }}'>
                                <td class="product-thumbnail">
                                    {{ $order->id }}
                                </td>
                                <td class="product-name">{{ $order->created_at->format('d-m-Y') }}</td>
                                <td class="product-price-cart"><span class="amount">{!! $status !!}</span></td>
                                <td class="product-quantity">
                                    {!! $payment_status !!}
                                </td>
                                <td class="product-subtotal">{{ Number::currency($order->grand_total) }}</td>
                                <td class="product-remove">
                                    <a wire:navigate href="/my-orders/{{ $order->id }}"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="100%">You have no any orders yet</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $orders->links() }}
        </div>
    </div>
</div>
<!-- cart area end -->
</div>
