<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;



class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('frontend.product.show', compact('product'));
    }
}
