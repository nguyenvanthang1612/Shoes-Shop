<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;


class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        $products = Product::where('category_id', $category->id)->paginate(10);
        return view('frontend.category-product.index', compact('products'));
    }
}
