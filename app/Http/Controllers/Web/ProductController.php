<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('frontend.product.show', compact('product'));
    }
}
