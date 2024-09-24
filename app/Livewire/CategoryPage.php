<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Categories Page - Online Shop')]

class CategoryPage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.category-page', [
            'categories' => $categories = Category::with('products')->where('is_active', 1)->paginate(8),
        ]);
    }
}
