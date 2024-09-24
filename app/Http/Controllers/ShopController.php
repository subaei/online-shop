<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public $selected_categories = [];

    public function index()
    {
        $title = 'Products Shop Page - Online Shop';
        $categories = Category::where('is_active', 1)->get(['id', 'name', 'slug']);
        $brands = Brand::where('is_active', 1)->get(['id', 'name', 'slug']);
        $products = Product::query()->where('is_active', 1)->paginate(6);
        return view('shop', compact('title', 'categories', 'brands', 'products'));
    }
}
