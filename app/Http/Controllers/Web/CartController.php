<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request,$id)
    {
        $product = Product::find($id);
        if($product != null)
        {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('frontend.shoppingCart.cart-item');
    }

    public function deleteItemCart(Request $request, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if (count($newCart->products) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
        return view('frontend.shoppingCart.cart-item');
    }

    public function showListCart()
    {
        return view("frontend.shoppingCart.card-page-step-1");
    }

    public function reloadProductsInCardPage(Request $request)
    {
        if ($request->ajax()) {
            return view('frontend.shoppingCart._product-cart-page-step-1');
        }
    }


    public function updateCartQuantity(Request $request, $id)
    {
    }
    /*public function deleteListCart(Request $request,$id)
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
           return view('frontend.shoppingCart.list-cart);
    }*/



}
