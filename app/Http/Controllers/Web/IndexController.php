<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        $featureProducts = Product::latest()->take(10)->get();
        $latestProducts = Product::latest()->take(5)->with('category')->get();
        return view('frontend.index', compact('products', 'latestProducts', 'featureProducts'));
    }
}


