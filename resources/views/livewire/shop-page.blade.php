
<div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a wire:navigate href="/">Home</a></li>
                            <li>Shop</li>
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
                            <p>There Are {{ $products_count }} Products.</p>
                        </div>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select wire:model.live="sort">
                                    <option value="latest">Sort by latest</option>
                                    <option value="price">Sort by peice</option>
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
                                    <div class="mb-30px col-md-4 col-sm-6  p-0" wire:key="{{ $product->id }}">
                                        <div class="slider-single-item">
                                            <!-- Single Item -->
                                            <article class="list-product p-0 text-center">
                                                <div class="product-inner">
                                                    <div class="img-block">
                                                        <a wire:navigate href="/product-details/{{ $product->slug }}" class="thumbnail">
                                                            {{-- @if(count($product->images) > 1)
                                                                @for($i = 0; $i <= 1; $i++)
                                                                    <img class="{{ $i == 0 ? 'first-img' : 'second-img'}} " src="{{ url('storage', $product->images[$i]) }}" alt="{{ $product->name }}" />
                                                                @endfor
                                                            @else
                                                                <img class="first-img " src="{{ url('storage', $product->images[0]) }}" alt="$product->name" />
                                                            @endif --}}
                                                            <img class="first-img" src="{{ url('storage', $product->images[0]) }}" alt="$product->name" />
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
                                                        <a wire:click.prevent="addToCart({{ $product->id }})" href="#" class="add-to-curt" title="Add to cart">
                                                            <i class="lnr lnr-cart"></i> 
                                                            <span wire:loading.remove wire:target='addToCart({{ $product->id }})'>Add to cart</span> 
                                                            <span wire:loading wire:target='addToCart({{ $product->id }})'>Adding...</span>
                                                        </a>
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
                                            <li wire:key="{{ $category->id }}">
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" wire:model.live="selected_categories" id="{{ $category->id }}" value="{{ $category->id }}" /> <label for="{{ $category->id }}"><a>{{ $category->name }}</a></label>
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
                                            <li wire:key="{{ $brand->id }}">
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" wire:model.live="selected_brands" id="{{ $brand->id }}" value="{{ $brand->id }}" /> <label for="{{ $brand->id }}"><a>{{ $brand->name }}</a></label>
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
                                                <label for="featured">
                                                    <input type="checkbox" id="featured" wire:model.live="featured" value="1" /> <label for="featured"><a>Featured Products</a></label>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" id="on_sale" wire:model.live="on_sale" value="1" /> <label for="on_sale"><a>On Sale</a></label>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget mt-20" style="margin-bottom: 20px;">
                                <h4 class="pro-sidebar-title">Price</h4>
                                <div class="price-filter mt-10">
                                    <div class="price-slider-amount">
                                        <span class="inline-block price-range-value">{{ Number::currency($price_range)}}</span>
                                        <input class="price-range-line" wire:model.live="price_range" type="range" name="price_range" max="10000" value="100" step="100" />
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="inline-block">{{ Number::currency(1)}}</span>
                                        <span class="inline-block">{{ Number::currency(10000)}}</span>
                                    </div>
                                    {{-- <div id="slider-range"></div> --}}
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
</div>
