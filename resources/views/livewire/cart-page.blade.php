<div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a wire:navigate href="/">Home</a></li>
                            <li>Cart</li>
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
            <h3 class="cart-page-title">Your cart items</h3>
            @if (count($cart_items) > 0)
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
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart_items as $item)
                                    <tr wire:key='{{ $item["product_id"] }}'>
                                        <td class="product-thumbnail">
                                            <a wire:navigate  href="#"><img class="img-responsive" src="{{ url('storage', $item["image"])}}" alt="{{ $item["name"] }}" /></a>
                                        </td>
                                        <td class="product-name"><a wire:navigate href="#">{{ $item["name"] }}</a></td>
                                        <td class="product-price-cart"><span class="amount">{{ Number::currency($item["unit_amount"]) }}</span></td>
                                        <td class="product-quantity">
                                            <div class="view-cart-plus-minus">
                                                <div wire:click='decreaseQty({{ $item["product_id"] }})' class="dec qtybutton">-</div>
                                                <input class="view-cart-plus-minus-box" type="text" name="qtybutton" value="{{ $item["quantity"] }}" />
                                                <div wire:click='increaseQty({{ $item["product_id"] }})' class="inc qtybutton">+</div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">{{ Number::currency($item["total_amount"]) }}</td>
                                        <td class="product-remove">
                                            <a wire:click.prevent='removeItem({{ $item['product_id'] }})' href="#">
                                                <span wire:loading.remove wire:target='removeItem({{ $item['product_id'] }})'>
                                                    <i class="lnr lnr-trash"></i>
                                                </span> 
                                                <span wire:loading wire:target='removeItem({{ $item['product_id'] }})'>Removing...</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12  col-12">
                    <div class="grand-totall">
                        <div class="title-wrap">
                            <h4 class="cart-bottom-title section-bg-gary-cart">Summary</h4>
                        </div>
                        <div class="total-shipping my-total-shipping">
                            <h5>Subtotal</h5>
                            <h5 style="float: right;">{{ Number::currency($grand_total) }}</h5>
                        </div>
                        <div class="total-shipping my-total-shipping">
                            <h5>Tax</h5>
                            <h5 style="float: right;">{{ Number::currency(0) }}</h5>
                        </div>
                        <div class="total-shipping my-total-shipping" style="border-bottom: 1px solid #d5d5d5;padding-bottom: 15px;">
                            <h5>Shipping</h5>
                            <h5 style="float: right;">{{ Number::currency(0) }}</h5>
                        </div>
                        <h5>Grand Total <span>{{ Number::currency($grand_total) }}</span></h5>
                        @if ($cart_items)
                        <a wire:navigate href="/checkout">Checkout</a>
                        @endif
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-12">
                    <div class="empty-text-contant text-center">
                        <i class="lnr lnr-cart"></i>
                        <h1>There are no more items in your cart</h1>
                        <a wire:navigate class="empty-cart-btn" href="/shop">
                            <i class="ion-ios-arrow-left"> </i> Continue shopping
                        </a>
                    </div>
                </div>
            </div>    
            @endif
        </div>
    </div>
    <!-- cart area end -->
</div>
