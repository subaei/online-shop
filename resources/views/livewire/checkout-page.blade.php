<div>
    <!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="/">Home</a></li>
                        <li>Checkout</li>
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
        <form wire:submit.prevent='placeOrder'>
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>First Name</label>
                                    <input type="text" class="@error('first_name') error @enderror" wire:model="first_name" />
                                    @error('first_name')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Last Name</label>
                                    <input type="text" class="@error('last_name') error @enderror" wire:model="last_name" />
                                    @error('last_name')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Street Address</label>
                                    <input class="billing-address @error('street_address') error @enderror" wire:model="street_address" placeholder="House number and street name" type="text" />
                                    @error('street_address')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Town / City</label>
                                    <input type="text" class="@error('city') error @enderror" wire:model="city" />
                                    @error('city')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>State / Country</label>
                                    <input type="text" class="@error('state') error @enderror" wire:model="state" />
                                    @error('state')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" class="@error('zip_code') error @enderror" wire:model="zip_code" />
                                    @error('zip_code')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Phone</label>
                                    <input type="text" class="@error('phone') error @enderror" wire:model="phone" />
                                    @error('phone')
                                        <i class="lnr lnr-warning text-danger"></i>
                                        <span class="error-span text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. "  wire:model="notes"></textarea>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Selecet Payment Method</h4>
                            <div class="additional-info">
                                <label class="particles-checkbox-container">
                                    <input type="radio" class="particles-checkbox" value="cod"  wire:model="payment_method">
                                    <span>Cash on delivery (cod)</span>
                                </label>
                                <label class="particles-checkbox-container">
                                    <input type="radio" class="particles-checkbox" value="stripe"  wire:model="payment_method">
                                    <span>Stripe</span>
                                </label>
                            </div>
                            @error('payment_method')
                                <i class="lnr lnr-warning text-danger"></i>
                                <span class="error-span text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h5 class="title">ORDER SUMMARY</h5>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Subtotal</li>
                                        <li>{{ Number::currency($grand_total) }}</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Taxes</li>
                                        <li>{{ Number::currency(0) }}</li>
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>{{ Number::currency(0) }}</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Grand Total</li>
                                        <li>{{ Number::currency($grand_total) }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order">
                            {{-- <a wire:navigate class="btn-hover" href="#">Place Order</a> --}}
                            <button type="submit" class="basic-btn btn-hover" href="#">
                                <span wire:loading.remove>Place Order</span>
                                <span wire:loading>Processing...</span>
                            </button>
                        </div>
                    </div>
                    <div class="table-content table-checkout table-responsive cart-table-content">
                        <h5 class="title">BASKET SUMMARY</h5>
                        <table>
                            <tbody>
                                @foreach ($cart_items as $item)
                                <tr wire:key='{{ $item["product_id"] }}'>
                                    <td class="product-thumbnail">
                                        <a wire:navigate  href="#">
                                            <img class="img-responsive" src="{{ url('storage', $item["image"])}}" alt="{{ $item["name"] }}" style="width: 50px;" />
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a wire:navigate href="#">{{ $item["name"] }}</a>
                                        <p>Quantity: {{ $item["quantity"] }}</p>
                                    </td>
                                    <td class="product-price-cart">
                                        <span class="amount">{{ Number::currency($item["total_amount"]) }}</span>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- checkout area end -->
</div>
