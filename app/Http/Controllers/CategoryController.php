<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Categories Page - Online Shop';
        $categories = Category::where('is_active', 1)->get();
        $categories_count = $categories->count();
        return view('categories', compact('title', 'categories', 'categories_count'));
    }
}
