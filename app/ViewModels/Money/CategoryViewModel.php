<?php
namespace App\ViewModels\Money;

use Spatie\ViewModels\ViewModel;
use App\Models\Money\Category;

class CategoryViewModel extends ViewModel
{
    public $indexUrl = null;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function category(): Category
    {
        return $this->category ?? new Category();
    }

    public function categories(): Collection
    {
        return Category::get();
    }
}
