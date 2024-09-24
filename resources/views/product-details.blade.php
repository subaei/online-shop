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
                        <li><a wire:navigate href="/shop">Shop</a></li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Shop details Area start -->
<section class="product-details-area mtb-60px ">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-img product-details-tab">
                    <div class="zoompro-wrap zoompro-2">
                        @foreach ($product->images as $images)
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="{{ url('storage', $images) }}" data-zoom-image="{{ url('storage', $images) }}" alt="{{ $product->name }}" />
                        </div>
                        @endforeach
                    </div>
                    <div id="gallery" class="product-dec-slider-2">
                        @foreach ($product->images as $images)
                        <div class="single-slide-item">
                            <img class="img-responsive" data-image="{{ url('storage', $images) }}" data-zoom-image="{{ url('storage', $images) }}" src="{{ url('storage', $images) }}" alt="{{ $product->name }}" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="product-details-content">
                    <p class="reference">Reference:<span> demo_17</span></p>
                    <h2>{{ $product->name }}</h2>
                    <div class="pro-details-rating-wrap">
                        <div class="rating-product">
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                            <i class="ion-android-star"></i>
                        </div>
                        <span class="read-review"><a wire:navigate class="reviews" href="#">Read reviews (1)</a></span>
                    </div>
                    <div class="pricing-meta">
                        <ul>
                            <li class="cuttent-price">{{ Number::currency($product->price) }}</li>
                            <li class="discount-flag">save 10%</li>
                        </ul>
                    </div>
                    <div class="pro-details-list">
                        <p>{!! Str::markdown($product->description) !!}</p>
                    </div>
                    <div class="pro-details-quality mt-0px">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a wire:navigate href="#">  Add To Cart</a>
                        </div>
                    </div>
                    <div class="pro-details-wish-com">
                        <div class="pro-details-wishlist">
                            <a wire:navigate href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                        </div>
                    </div>
                    <div class="pro-details-social-info">
                        <span>Share</span>
                        <div class="social-info">
                            <ul>
                                <li>
                                    <a wire:navigate title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate title="Google+" href="#"><i class="ion-social-google"></i></a>
                                </li>
                                <li>
                                    <a wire:navigate title="Instagram" href="#"><i class="ion-social-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pro-details-policy">
                        <ul>
                            <li><img src="{{ asset('assets/images/icons/policy.png') }}" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><img src="{{ asset('assets/images/icons/policy-2.png') }}" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                            <li><img src="{{ asset('assets/images/icons/policy-3.png') }}" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop details Area End -->
<!-- product details description area start -->
<div class="description-review-area mb-50px bg-light-gray-3 ptb-50px">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a wire:navigate data-bs-toggle="tab" href="#des-details1">Description</a>
                <a wire:navigate class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                <a wire:navigate data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane active">
                    <div class="product-anotherinfo-wrapper">
                        <ul>
                            <li><span>Weight</span> 400 g</li>
                            <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                        </ul>
                    </div>
                </div>
                <div id="des-details1" class="tab-pane">
                    <div class="product-description-wrapper">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        <p>
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        </p>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="{{ asset('assets/images/review-image/1.png') }}" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a wire:navigate href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>
                                                Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="{{ asset('assets/images/review-image/2.png') }}" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a wire:navigate href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="ratting-form-wrapper pl-50">
                                <h3>Add a Review</h3>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="star-box">
                                            <span>Your rating:</span>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-10">
                                                    <input placeholder="Name" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-10">
                                                    <input placeholder="Email" type="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                    <input type="submit" value="Submit" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details description area end -->

<!-- Arrivals Area Start --> 
<div class="arrival-area single-product-nav mb-20px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">12 Other Products In The Same Category:</h2>
                </div>
            </div>
        </div>
        <!-- Arrivel slider start -->
        <div class="arrival-slider-wrapper slider-nav-style-1">
            <div class="slider-single-item">
                <!-- Single Item -->
                <article class="list-product text-center">
                    <div class="product-inner">
                        <div class="img-block">
                            <a wire:navigate href="single-product.html" class="thumbnail">
                                <img class="first-img" src="{{ asset('assets/images/product-image/4.jpg') }}" alt="" />
                                <img class="second-img" src="{{ asset('assets/images/product-image/5.jpg') }}" alt="" />
                            </a>
                            <div class="add-to-link">
                                <ul>
                                    <li>
                                        <a wire:navigate class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="lnr lnr-magnifier"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">-12%</li>
                        </ul>
                        <div class="product-decs">
                            <a wire:navigate class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a wire:navigate href="single-product.html" class="product-link">Edifier H840 Audiophile</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">$23.90</li>
                                    <li class="current-price">$21.51</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="slider-single-item">
                <!-- Single Item -->
                <article class="list-product text-center">
                    <div class="product-inner">
                        <div class="img-block">
                            <a wire:navigate href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                            </a>
                            <div class="add-to-link">
                                <ul>
                                    <li>
                                        <a wire:navigate class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="lnr lnr-magnifier"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a wire:navigate class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a wire:navigate href="single-product.html" class="product-link">SoundBox Pro Portable</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">$23.90</li>
                                    <li class="current-price">$21.51</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                </article>
                <!-- Single Item -->
            </div>
            <div class="slider-single-item">
                <!-- Single Item -->
                <article class="list-product text-center">
                    <div class="product-inner">
                        <div class="img-block">
                            <a wire:navigate href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                            </a>
                            <div class="add-to-link">
                                <ul>
                                    <li>
                                        <a wire:navigate class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="lnr lnr-magnifier"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a wire:navigate class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a wire:navigate href="single-product.html" class="product-link">Naham WiFi HD 1080P</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="current-price">$21.51</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="slider-single-item">
                <!-- Single Item -->
                <article class="list-product text-center">
                    <div class="product-inner">
                        <div class="img-block">
                            <a wire:navigate href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                            </a>
                            <div class="add-to-link">
                                <ul>
                                    <li>
                                        <a wire:navigate class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="lnr lnr-magnifier"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-decs">
                            <a wire:navigate class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a wire:navigate href="single-product.html" class="product-link">Polk Audio T30 Speaker</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="current-price">$21.51</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="slider-single-item">
                <!-- Single Item -->
                <article class="list-product text-center">
                    <div class="product-inner">
                        <div class="img-block">
                            <a wire:navigate href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                            </a>
                            <div class="add-to-link">
                                <ul>
                                    <li>
                                        <a wire:navigate class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="lnr lnr-magnifier"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="product-flag">
                        </ul>
                        <div class="product-decs">
                            <a wire:navigate class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a wire:navigate href="single-product.html" class="product-link">Numkuda USB 2.0 Gamepad</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="current-price">$21.51</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a wire:navigate href="#"  class="add-to-curt" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="slider-single-item">
                <!-- Single Item -->
                <article class="list-product text-center">
                    <div class="product-inner">
                        <div class="img-block">
                            <a wire:navigate href="single-product.html" class="thumbnail">
                                <img class="first-img" src="assets/images/product-image/4.jpg" alt="" />
                                <img class="second-img" src="assets/images/product-image/5.jpg" alt="" />
                            </a>
                            <div class="add-to-link">
                                <ul>
                                    <li>
                                        <a wire:navigate class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="lnr lnr-magnifier"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                    </li>
                                    <li>
                                        <a wire:navigate href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">-12%</li>
                        </ul>
                        <div class="product-decs">
                            <a wire:navigate class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a wire:navigate href="single-product.html" class="product-link">Edifier H840 Audiophile</a></h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">$23.90</li>
                                    <li class="current-price">$21.51</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-btn">
                            <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <!-- Arrivel slider end -->
    </div>
</div>
<!-- Arrivals Area End -->

@endsection