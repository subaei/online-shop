<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Helpers\WishlistManagement;
use App\Livewire\Partials\Header;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('My Wislist Page - Online Shop')]

class MyWishlistPage extends Component
{

    use LivewireAlert;

    public $wishlist_items = [];

    public function mount()
    {
        $this->wishlist_items = WishlistManagement::getWishlistItemsFromCookie();
    }

    public function removeItem($product_id)
    {
        $this->wishlist_items = WishlistManagement::removeWishlistItem($product_id);

        $this->dispatch('update-wishlist-count', total_count_wishlist: count($this->wishlist_items))->to(Header::class);

        $this->alert('success', 'Item removed from Wishlist successfully!!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    
    // Add product to cart method
    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCart($product_id);
        $total_count_wishlist = WishlistManagement::removeWishlistItem($product_id);
        
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Header::class);
        $this->dispatch('update-wishlist-count', total_count_wishlist: $total_count_wishlist)->to(Header::class);

        $this->removeItem($product_id);

        $this->alert('success', 'Product added to the cart successfully!!', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function render()
    {
        return view('livewire.my-wishlist-page');
    }
}
