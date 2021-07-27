<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        $products = Product::where('category_id', $category->id)->paginate(10);
        return view('frontend.category-product.index', compact('products'));
    }

    public function search(Request $request)
    {
        $searchText = $request->input('search');
        $products = Product::where('name', 'LIKE', '%'.$searchText.'%')->paginate(10);
        $products->appends(['search' => $searchText]);
        return view('frontend.category-product.index', compact('products'));
    }
}
