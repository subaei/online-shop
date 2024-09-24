<div>
    <!-- Slider Start -->
    <div class="slider-area">
        <div class="hero-slider-wrapper">
            <!-- Single Slider  -->
            <div class="single-slide slider-height-1 bg-img d-flex" data-bg-image="assets/images/slider-image/sample-1.jpg">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                        <h1 class="animated color-black">
                            Xbox One Pro <br />
                            Wireless Controller
                        </h1>
                        <p class="animated color-gray">Revolution Pro Controller.</p>
                        <a wire:navigate href="/shop" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
            <div class="single-slide slider-height-1 bg-img d-flex" data-bg-image="assets/images/slider-image/sample-2.jpg">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-2 text-left pl-60px">
                        <h1 class="animated color-black">
                            Bobovr Z4 Virtual <br />
                            Reality 3D Glasses
                        </h1>
                        <p class="animated color-gray">Virtual reality through a new lens</p>
                        <a wire:navigate href="/shop" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
            <div class="single-slide slider-height-1 bg-img d-flex" data-bg-image="assets/images/slider-image/sample-3.jpg">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-3 text-left pl-60px">
                        <h1 class="animated color-black">
                            Portable Wireless <br />
                            Bluetooth Speaker
                        </h1>
                        <p class="animated color-gray">With Colorful LED Light</p>
                        <a wire:navigate href="/shop" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
        </div>
    </div>
    <!-- Slider End -->

    <!-- Static Area Start -->
    <div class="static-area mtb-50px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
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
                            <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
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
                            <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
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
                            <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
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

    <!-- Feature Area Start -->
    <div class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Featured Products</h2> 
                            </div>
                        </div>
                    </div>
                    <div class="feature-slider-wrapper slider-nav-style-1">
                        @foreach ($featuredProducts as $product)
                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center mb-30px" wire:key='{{ $product->id }}'>
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a wire:navigate class="center-img-area" href="/product-details/{{ $product->slug }}" class="thumbnail">
                                            <img class="first-img img-same-size" src="{{ url('storage', $product->images[0]) }}" alt="$product->name" />
                                        </a>
                                        <div class="add-to-link">
                                            <ul>
                                                <li>
                                                    <a wire:navigate class="quick_view" href="/product-details/{{ $product->slug }}">
                                                        <i class="lnr lnr-magnifier"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a wire:click.prevent="addToWishlist({{ $product->id }})" href="#" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a wire:navigate href="/product-details/{{ $product->slug }}" class="product-link">{{ $product->name }}</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">{{ Number::currency($product->price) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="cart-btn">
                                        <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Feature Area End -->
                {{-- <div class="col-lg-4 col-md-4 mt-lm-30px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Hot Deals</h2>
                            </div>
                        </div>
                    </div>
                    <div class="hot-deal-slider-wrapper slider-nav-style-1">
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
                                        <a wire:navigate class="inner-link" href="/shop"><span>STUDIO DESIGN</span></a>
                                        <h2><a wire:navigate href="single-product.html" class="product-link">TCL 49S5 49” 4K Ultra HD</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$21.51</li>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="availability-list in-stock">Availability: <span>300 In Stock</span></div>
                                    <div class="clockdiv">
                                        <div data-countdown="2023/12/01"></div>
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
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
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
                                        <a wire:navigate class="inner-link" href="/shop"><span>STUDIO DESIGN</span></a>
                                        <h2><a wire:navigate href="single-product.html" class="product-link">Polk Audio T30 Speaker</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$21.51</li>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="availability-list in-stock">Availability: <span>300 In Stock</span></div>
                                    <div class="clockdiv">
                                        <div data-countdown="2023/12/01"></div>
                                    </div>
                                    <div class="cart-btn">
                                        <a wire:navigate href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Brand Area Start -->
    <div class="banner-area mt-30px mb-20px">
        <div class="container">
            <div class="row">
                @foreach ($brands as $brand)
                    <div class="col-md-3 col-lg-3">
                        <div class="banner-wrapper">
                            <a wire:navigate href="/shop?selected_brands[0]={{ $brand->id }}"><img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}" /></a>
                            <div class="barnd-name">
                                <h3>{{ $brand->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    
    <!-- category Area Start -->
    <div class="popular-categories-area mt-50px mb-50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">Popular Categories</h2>
                    </div>
                </div>
            </div>
            <div class="popular-category-slider-wrapper slider-nav-style-1 slider-nav-style-2 ">
                @foreach ($categories as $category)
                <!-- single-item -->
                <div class="single-slider-item">
                    <div class="thumb-category">
                        <a wire:navigate href="/shop?selected_categories[0]={{ $category->id }}">
                            <img class="img-same-size" src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}" />
                        </a>
                    </div>
                    <div class="category-discript">
                        <h4>{{ $category->name }}</h4>
                        <ul>
                            {{-- @foreach ($category->products as $product)
                                <li><a wire:navigate href="#">{{ $product->name }}</a></li>
                            @endforeach --}}
                            @if(count($category->products) > 1)
                                @for($i = 0; $i <= 1; $i++)
                                    <li><a wire:navigate href="#">{{ substr($category->products[$i]["name"], 0, 30) }}</a></li>
                                @endfor
                            @else
                                <li><a wire:navigate href="/product-details/{{ $category->products[0]["slug"] }}">{{ substr($category->products[0]["name"], 0, 20) }}</a></li>
                            @endif
                        </ul>
                        <a wire:navigate href="/shop?selected_categories[0]={{ $category->id }}" class="view-all-btn">View All</a>
                    </div>
                </div>
                <!-- single-item -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- category Area End -->

    <!-- News letter area -->
    <div class="news-letter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="title-newsletter">
                    <h2>Sign Up For Newsletters</h2>
                    <p class="des">Be the First to Know. Sign up for newsletter today !</p>
                </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form
                            wire.submit.prevent
                            id="mc-embedded-subscribe-form"
                            class="validate"
                            novalidate=""
                        >
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News letter area  End -->
</div>
