<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    // public $slug;

    // public function mount($slug)
    // {
    //     $this->slug = $slug;
    // }

    public function index($slug)
    {
        $title = 'Products Details - Online Shop';
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product-details', compact('title', 'product'));
    }
}
