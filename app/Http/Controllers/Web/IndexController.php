<?php
namespace App\Http\Controllers\Web;

use App\Helpers\CollectionPaginator;
use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(CollectionPaginator $collectionPaginator)
    {
        $allLatestProducts = Product::latest()->get();
        $products = $collectionPaginator->paginate($allLatestProducts);
        $featureProducts = $allLatestProducts->take(10);
        $latestProducts = $allLatestProducts->take(5)->load('category');
        return view('frontend.index', compact('products', 'latestProducts', 'featureProducts'));
    }
}


