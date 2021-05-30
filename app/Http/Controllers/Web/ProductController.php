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

    public function addCart(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        if($product != null)
        {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);

            $request->session()->put('Cart', $newCart);
        }
        return view('frontend.shoppingCart.cart-item');
    }

    public function deleteItemCart(Request $request,$id)
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

}
