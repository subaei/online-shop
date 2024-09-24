<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page - Online Shop';
        $featuredProducts = Product::where('is_featured', 1)->get();
        $brands = Brand::where('is_active', 1)->limit(4)->get();
        $categories = Category::where('is_active', 1)->limit(6)->get();
        return view('index', compact('title', 'featuredProducts', 'brands', 'categories'));
    }
}
