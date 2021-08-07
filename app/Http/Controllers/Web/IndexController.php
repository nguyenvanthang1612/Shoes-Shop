<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        $latestProducts = Product::latest()->take(5)->get();
        $featureProducts = Product::latest()->take(10)->get();
        $featureBlogs = Blog::latest()->take(5)->get();
        return view('frontend.index', compact('products', 'latestProducts', 'featureProducts', 'featureBlogs'));
    }
}


