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
                            <li>Shop</li>
                            <li>{{ json_encode($selected_categories) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- Shop Category Area End -->
    <div class="shop-category-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="shop-tab nav d-flex">
                            <a wire:navigate class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-th"></i>
                            </a>
                            <a wire:navigate href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list"></i>
                            </a>
                            <p>There Are 13 Products.</p>
                        </div>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select>
                                    <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option>
                                    <option value="">In stock</option>
                                </select>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area mt-35">
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row m-0">
                                    @foreach ($products as $product)
                                    <div class="mb-30px col-md-4 col-sm-6  p-0">
                                        <div class="slider-single-item">
                                            <!-- Single Item -->
                                            <article class="list-product p-0 text-center">
                                                <div class="product-inner">
                                                    <div class="img-block">
                                                        <a wire:navigate href="/product-details/{{ $product->slug }}" class="thumbnail">
                                                            <img class="first-img" src="{{ url('storage', $product->images[0]) }}" alt="$product->name" />
                                                            <img class="second-img" src="{{ url('storage', $product->images[0]) }}" alt="$product->name" />
                                                        </a>
                                                        <div class="add-to-link">
                                                            <ul>
                                                                <li>
                                                                    <a wire:navigate class="quick_view" href="/product-details/{{ $product->slug }}">
                                                                        <i class="lnr lnr-magnifier"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a wire:navigate href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <li class="new">-12%</li>
                                                    </ul>
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
                                            <!-- Single Item -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Tab One End -->
                        </div>
                        <!-- Shop Tab Content End -->
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mtb-50px">
                            {{-- <ul>
                                <li>
                                    <a wire:navigate class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a wire:navigate class="active" href="#">1</a></li>
                                <li><a wire:navigate href="#">2</a></li>
                                <li>
                                    <a wire:navigate class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul> --}}
                            {{ $products->links() }}
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-group mt-20">
                            <h3 class="sidebar-title m-0"><span>Filter By</span></h3>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget mt-30">
                                <h4 class="pro-sidebar-title">Categories</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        @foreach ($categories as $category)
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" id="{{ $category->id }}" value="{{ $category->id }}" /> <a href="#">{{ $category->name }}</a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget mt-30">
                                <h4 class="pro-sidebar-title">Brand</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        @foreach ($brands as $brand)
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" id="{{ $brand->id }}" value="{{ $brand->id }}" /> <a href="#">{{ $brand->name }}</a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget mt-30">
                                <h4 class="pro-sidebar-title">Product Status</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" /> <a wire:navigate href="#">In Stock</a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a wire:navigate href="#">On Sale</a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mt-20">
                                <h4 class="pro-sidebar-title">Price</h4>
                                <div class="price-filter mt-10">
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Category Area End -->

@endsection