<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebProductController extends Controller
{
    public function index()
    {
        $products = Product::oldest()->get();
        return view('frontend.index', compact('products'));
    }

    public function itemIndex($id)
    {
        $items = DB::table('products')->where('id' , $id)->get();
        return view('frontend.product.shop-item', compact('items'));
    }

    public function listIndex($id)
    {
        $lists = Product::where('category_id' , $id)->get();
        return view('frontend.product.shop-list', compact('lists'));
    }

}
