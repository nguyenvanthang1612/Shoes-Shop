<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function allIndex()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
            ->select('products.*', 'categories.name_category', 'inventories.quantity')
            ->get();
        return view('backend.product.all', [
            'products' => $products
        ]);
    }
}
