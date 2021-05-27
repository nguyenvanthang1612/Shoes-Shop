<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class CartController extends Controller
{
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
