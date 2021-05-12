<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WebProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontend.index', compact('products'));
    }
}
