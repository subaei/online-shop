<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Helpers\WishlistManagement;
use App\Livewire\Partials\Header;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products Shop - Online Shop')]

class ShopPage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    use LivewireAlert;

    #[Url]
    public $selected_categories = [];
    
    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    #[Url]
    public $price_range = 10000;

    #[Url]
    public $sort = 'latest';
    
    // Add product to wishlist method
    public function addToWishlist($product_id)
    {
        $total_count_wishlist = WishlistManagement::addItemToWishlist($product_id);
        
        $this->dispatch('update-wishlist-count', total_count_wishlist: $total_count_wishlist)->to(Header::class);

        $this->alert('success', 'Product added to the wishlist successfully!!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    // Add product to cart method
    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCart($product_id);
        
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Header::class);

        $this->alert('success', 'Product added to the cart successfully!!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        $categories = Category::where('is_active', 1)->get(['id', 'name', 'slug']);
        $brands = Brand::where('is_active', 1)->get(['id', 'name', 'slug']);
        $productsQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_categories)) {
            $productsQuery->WhereIn('category_id', $this->selected_categories);
        }

        if (!empty($this->selected_brands)) {
            $productsQuery->WhereIn('brand_id', $this->selected_brands);
        }

        if ($this->featured) {
            $productsQuery->Where('is_featured', 1);
        }

        if ($this->on_sale) {
            $productsQuery->Where('on_sale', 1);
        }

        if ($this->price_range) {
            $productsQuery->WhereBetween('price', [0, $this->price_range]);
        }

        if ($this->sort == 'latest') {
            $productsQuery->latest();
        }

        if ($this->sort == 'price') {
            $productsQuery->orderBy("price");
        }

        return view('livewire.shop-page', [
            'products'      => $productsQuery->paginate(6),
            'products_count'      => $productsQuery->count(),
            'categories'    => $categories,
            'brands'        => $brands,
        ]);
    }
}
