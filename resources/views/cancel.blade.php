@extends('layouts.app')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="index.html">Home</a></li>
                        <li>Order Canceled</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->

<!-- Empty Cart Area start-->
<div class="empty-cart-area mtb-50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="empty-text-contant text-center">
                    <i class="lnr lnr-cross-circle text-danger"></i>
                    <h1 class="text-danger">Payment Failed! Order Canceled</h1>
                    <a wire:navigate class="empty-cart-btn" href="/shop">
                        <i class="ion-ios-arrow-left"> </i> Continue shopping
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Empty Cart Area End-->

@endsection