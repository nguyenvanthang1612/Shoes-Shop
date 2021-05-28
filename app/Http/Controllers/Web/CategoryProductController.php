<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;


class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        $products = Product::where('category_id', $category->id)->paginate(10);
        return view('frontend.category-product.index', compact('products'));
    }

    public function addCart(Request $request,$id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        if($product != null)
        {
           $oldCart = Session('Cart') ? Session('Cart') : null;
           $newCart = new Cart($oldCart);
           $newCart->addCart($product,$id);

           $request->session()->put('Cart', $newCart);
        }
        return view('frontend.shoppingCart.cart-item');
    }

    public function deleteItemCart(Request $request,$id)
    {
           $oldCart = Session('Cart') ? Session('Cart') : null;
           $newCart = new Cart($oldCart);
           $newCart->deleteItemCart($id);
           if(count($newCart->products) > 0)
           {
            $request->session()->put('Cart', $newCart);
           }
           else
           {
            $request->session()->forget('Cart');
           }
           return view('frontend.shoppingCart.cart-item');
    }

    public function showListCart()
    {
        return view("frontend.shoppingCart.card-page-step-1");
    }
}
