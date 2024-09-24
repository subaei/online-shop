<div>
    <!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a wire:navigate href="/">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Wishlist area start -->
<div class="cart-main-area mtb-50px">
    <div class="container">
        <h3 class="cart-page-title">Your wishlist items</h3>
        @if (count($wishlist_items) > 0)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Until Price</th>
                                    <th>Add to cart</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlist_items as $item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a wire:navigate  href="#" style="display: flex; justify-content: center;">
                                            <img class="img-responsive" src="{{ url('storage', $item["image"])}}" width="50" alt="{{ $item["name"] }}" />
                                        </a>
                                    </td>
                                    <td class="product-name"><a wire:navigate href="#">{{ $item["name"] }}</a></td>
                                    <td class="product-price-cart"><span class="amount">{{ Number::currency($item["unit_amount"]) }}</span></td>
                                    <td class="product-wishlist-cart product-wishlist-wishlist">
                                        <div class="cart-btn">
                                            <a wire:click.prevent="addToCart({{ $item["product_id"] }})" href="#" class="add-to-curt" title="Add to cart">
                                                <i class="lnr lnr-cart"></i> 
                                                <span wire:loading.remove wire:target='addToCart({{ $item["product_id"] }})'>Add to cart</span> 
                                                <span wire:loading wire:target='addToCart({{ $item["product_id"] }})'>Adding...</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="product-wishlist-cart product-wishlist-wishlist">
                                        <div class="product-remove">
                                            <a wire:click.prevent="removeItem({{ $item["product_id"] }})" href="#">
                                                <i class="lnr lnr-trash"></i>
                                                <span wire:loading.remove wire:target='removeItem({{ $item["product_id"] }})'>Remove</span> 
                                                <span wire:loading wire:target='removeItem({{ $item["product_id"] }})'>Removing...</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-12">
                <div class="empty-text-contant text-center">
                    <i class="lnr lnr-heart"></i>
                    <h1>There are no more items in your wishlist</h1>
                    <a wire:navigate class="empty-cart-btn" href="/shop">
                        <i class="ion-ios-arrow-left"> </i> Continue shopping
                    </a>
                </div>
            </div>
        </div>    
        @endif
    </div>
</div>
<!-- Wishlist area end -->
</div>
