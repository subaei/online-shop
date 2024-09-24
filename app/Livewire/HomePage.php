<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Home Page - Online Shop')]

class HomePage extends Component
{
    public function render()
    {
        $featuredProducts = Product::where('is_featured', 1)->get();
        $brands = Brand::where('is_active', 1)->limit(4)->get();
        $categories = Category::with('products')->limit(2)->where('is_active', 1)->limit(6)->get();
        return view('livewire.home-page', [
            'featuredProducts'  => $featuredProducts,
            'brands'  => $brands,
            'categories'  => $categories,
        ]);
    }
}
