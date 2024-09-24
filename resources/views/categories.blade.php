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
                        <li>All Categories</li>
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
            <div class="col-md-12">
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
                        <p>There Are <span class="text-info">{{ $categories_count }}</span> Categories.</p>
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
                                @foreach ($categories as $category)
                                <div class="mb-30px col-md-4 col-lg-3 col-sm-6  p-0">
                                    <div class="slider-single-item">
                                        <!-- Single Item -->
                                        <article class="list-product p-0 text-center">
                                            <div class="product-inner">
                                                <div class="img-block">
                                                    <a wire:navigate href="/shop?selected_categories[0]={{ $category->id }}" class="thumbnail">
                                                        <img class="first-img" src="{{ url('storage', $category->image) }}" alt="" />
                                                        <img class="second-img" src="{{ url('storage', $category->image) }}" alt="" />
                                                    </a>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">-12%</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a wire:navigate class="inner-link" href="/shop?selected_categories[0]={{ $category->id }}"><span>{{ $category->name }}</span></a>
                                                    <h2><a wire:navigate href="/shop?selected_categories[0]={{ $category->id }}" class="product-link">{{ $category->name }}</a></h2>
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
                        <!-- Tab Two Start -->
                        
                        <!-- Tab Two End -->
                    </div>
                    <!-- Shop Tab Content End -->
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center mtb-50px">
                        <ul>
                            {{-- <li>
                                <a wire:navigate class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                            </li>
                            <li><a wire:navigate class="active" href="#">1</a></li>
                            <li><a wire:navigate href="#">2</a></li>
                            <li>
                                <a wire:navigate class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li> --}}
                        </ul>
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
        </div>
    </div>
</div>
<!-- Shop Category Area End -->

@endsection