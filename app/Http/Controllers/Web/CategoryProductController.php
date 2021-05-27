<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        $products = Product::where('category_id', $category->id)->get();
        return view('frontend.product.shop-list', compact('products'));
    }
}
