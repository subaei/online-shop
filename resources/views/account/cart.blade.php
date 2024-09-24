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
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a wire:navigate  href="#"><img class="img-responsive" src="assets/images/popular-image/2-1.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a wire:navigate href="#">Product Name</a></td>
                                        <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$70.00</td>
                                        <td class="product-remove">
                                            <a wire:navigate href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a wire:navigate  href="#"><img class="img-responsive" src="assets/images/popular-image/2-2.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a wire:navigate href="#">Product Name</a></td>
                                        <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$80.00</td>
                                        <td class="product-remove">
                                            <a wire:navigate href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a wire:navigate  href="#"><img class="img-responsive" src="assets/images/popular-image/2-3.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a wire:navigate href="#">Product Name</a></td>
                                        <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$90.00</td>
                                        <td class="product-remove">
                                            <a wire:navigate href="#"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
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
                        <a wire:navigate href="/checkout">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end -->

@endsection