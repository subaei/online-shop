<?php

namespace App\Livewire\Partials;

use App\Helpers\CartManagement;
use App\Helpers\WishlistManagement;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Header extends Component
{
    public $search = "";
    public $selected_categories = 0;
    public $total_count;
    public $total_count_wishlist;

    public function mount()
    {
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
        $this->total_count_wishlist = count(WishlistManagement::getWishlistItemsFromCookie());
    }

    public function resetSearch()
    {
        $this->reset(['search']);
    }

    #[On('update-cart-count')]
    public function updateCartCount($total_count)
    {
        $this->total_count = $total_count;
    }

    #[On('update-wishlist-count')]
    public function updateWishlistCount($total_count_wishlist)
    {
        $this->total_count_wishlist = $total_count_wishlist;
    }

    public function render()
    {
        // ************ Start Search ******************

        $results = [];

        if (strlen($this->search) > 1) {
            $results = Product::where('name', 'like', '%'.$this->search.'%')->limit(5)->get();
            if ($this->selected_categories > 0) {
                $results->WhereIn('category_id', $this->selected_categories);
            }
        } else {
            $this->search = "";
        }

        // ************ EndSearch ******************

        $categories = Category::where('is_active', 1)->get(['id', 'name']);
        return view('livewire.partials.header', [
            'categories' => $categories,
            'results' => $results,
        ]);
    }
}
