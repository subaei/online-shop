<div>
    <header class="header-wrapper">
        <!-- Header Nav Start -->
        <div class="header-nav">
            <div class="container">
                <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                    <div class="header-static-nav">
                        <a>
                            @if (isset(auth()->user()->email))
                            <i class="lnr lnr-envelope"></i> {{ auth()->user()->email }}
                            @endif
                        </a>
                    </div>
                    <div class="header-menu-nav">
                        <ul class="menu-nav">
                            @guest
                            <li><a wire:navigate href="/login" class="shop-btn animated" tabindex="-1"><i class="lnr lnr-user"></i> Login</a></li>
                            @endguest
                            @auth
                            <li>
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lnr lnr-user"></i> {{ auth()->user()->name }} <i class="ion-ios-arrow-down"></i></button>

                                    <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                        <li><a wire:navigate href="/my-account"><i class="lnr lnr-user"></i> My account</a></li>
                                        <li><a wire:navigate href="/my-orders"><i class="lnr lnr-briefcase"></i> Orders</a></li>
                                        <li><a wire:navigate href="/logout"><i class="lnr lnr-exit"></i> logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-top bg-white ptb-30px d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex">
                        <div class="logo align-self-center">
                            <a wire:navigate href="/"><img class="img-responsive" src="{{ asset('assets/images/logo/logo.png') }}" width="200" alt="logo.png" /></a>
                        </div>
                    </div>
                    <div class="col-md-9 align-self-center">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body mr-20px">
                                <form class="d-flex" action="#">
                                    <div class="search-icon">
                                        <i class="lnr lnr-magnifier"></i>
                                    </div>
                                    <input wire:model.live.debounce.500ms="search" type="text" placeholder="Enter your search key ... "  id="top-search" />
                                    @if (sizeOf($results) > 0)
                                    <div class="searching-results">
                                        @foreach ($results as $result)
                                            <div class="item">
                                                <a wire:navigate href="/product-details/{{ $result->slug }}">{{ $result->name }}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </form>
                            </div>
                            <!--Cart info Start -->
                            <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    <a wire:navigate href="/my-wishlist" class="heart">
                                        <i class="lnr lnr-heart"></i>
                                        <span>Wishlist</span>
                                        @if ($total_count_wishlist > 0)
                                        <span class="cart-count-number">{{ $total_count_wishlist }}</span>
                                        @endif
                                    </a>
                                    <a wire:navigate href="/cart" class="bag">
                                        <i class="lnr lnr-cart"></i>
                                        <span>My Cart</span>
                                        @if ($total_count > 0)
                                        <span class="cart-count-number">{{ $total_count }}</span>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--Cart info End -->
                    </div>
                </div>
                {{-- @if (sizeOf($results) > 0)
                <div class="row">
                    <div class="searching-results">
                        @foreach ($results as $result)
                            <div class="item">
                                <a wire:navigate href="/product-details/{{ $result->slug }}">{{ $result->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif --}}
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-menu bg-white sticky-nav d-lg-block d-none padding-0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header-menu-vertical">
                            <h4 class="menu-title">Browseee Categories </h4>
                            <ul class="menu-content display-none">
                                @foreach ($categories as $category)
                                <li class="menu-item" wire:key='{{ $category->id }}'><a wire:navigate href="/shop?selected_categories[0]={{ $category->id }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                            <!-- menu content -->
                        </div>
                        <!-- header menu vertical -->
                    </div>
                    <div class="col-lg-9">
                        <div class="header-horizontal-menu">
                            <ul class="menu-content">
                                <li><a wire:navigate class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
                                <li>
                                    <a wire:navigate class="{{ request()->is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
                                </li>
                                <li>
                                    <a wire:navigate class="{{ request()->is('shop') ? 'active' : '' }}" href="/shop">Shop</a>
                                </li>
                                <li><a wire:navigate class="{{ request()->is('contact-us') ? 'active' : '' }}" href="/contact-us">contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header menu -->
    </header>
    <!-- Header Section End Here -->    

        <!-- Mobile Header Section Start -->
    <div class="mobile-header d-lg-none sticky-nav bg-white ptb-20px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a wire:navigate href="/"><img class="img-responsive" src="{{ asset('assets/images/logo/logo.png') }}" width="200" alt="logo.png" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <a wire:navigate href="/my-wishlist" class="heart"><i class="lnr lnr-heart"></i><span>Wishlist</span></a>
                            <a wire:navigate href="/cart" class="bag">
                                <i class="lnr lnr-cart"></i>
                                <span>My Cart</span>
                                @if ($total_count > 0)
                                <span class="cart-count-number">{{ $total_count }}</span>
                                @endif
                            </a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>

    <!-- Search Category Start -->
    <div class="mobile-search-area d-lg-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <form class="d-flex" action="#">
                            <input wire:model.live.debounce.500ms="search" type="text" placeholder="Enter your search key ... " id="top-search" />
                            @if (sizeOf($results) > 0)
                            <div class="searching-results">
                                @foreach ($results as $result)
                                    <div class="item">
                                        <a wire:navigate href="/product-details/{{ $result->slug }}">{{ $result->name }}</a>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
                {{-- @if (sizeOf($results) > 0)
                <div class="row">
                    <div class="searching-results">
                        @foreach ($results as $result)
                            <div class="item">
                                <a wire:navigate href="/product-details/{{ $result->slug }}">{{ $result->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif --}}
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <div class="mobile-category-nav d-lg-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                @foreach ($categories as $category)
                                <li wire:key='{{ $category->id }}'><a wire:navigate href="/shop?selected_categories[0]={{ $category->id }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a wire:navigate href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a wire:navigate href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a wire:navigate href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a wire:navigate href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a wire:navigate href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a wire:navigate href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a wire:navigate href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a wire:navigate href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a wire:navigate href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a wire:navigate href="/wishlist" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a wire:navigate href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a wire:navigate href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a wire:navigate href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a wire:navigate href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a wire:navigate href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a wire:navigate href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a wire:navigate href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a wire:navigate href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a wire:navigate href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a wire:navigate href="/cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a wire:navigate href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            {{-- <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="lnr lnr-magnifier"></i></button>
                </form>
            </div> --}}
            <div class="offcanvas-menu">
                <ul>
                    <li><a wire:navigate href="/"><span class="menu-text">Home</span></a></li>
                    <li><a wire:navigate href="/categories"><span class="menu-text">Categories</span></a></li>
                    <li><a wire:navigate href="/shop"><span class="menu-text">Shop</span></a></li>
                    <li><a wire:navigate href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li>
                        <a wire:navigate href="#"><i class="ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a wire:navigate href="#"><i class="ion-social-twitter"></i></a>
                    </li>
                    <li>
                        <a wire:navigate href="#"><i class="ion-social-google"></i></a>
                    </li>
                    <li>
                        <a wire:navigate href="#"><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a wire:navigate href="#"><i class="ion-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->
</div>