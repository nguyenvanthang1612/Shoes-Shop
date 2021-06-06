<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\OrderSuccessMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    private const USE_CURRENT_SHIPPING_ADDRESS = 1;
    private const USE_DIFFERENT_SHIPPING_ADDRESS = 2;

    public function addCart(Request $request, $id)
    {
        $product = Product::find($id);
        if($product != null)
        {
            $oldCart = session('Cart') ? session('Cart') : [];
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);
            $request->session()->put('Cart', $newCart);
        }
    }

    public function deleteItemCart(Request $request, $id)
    {
        $oldCart = session('Cart') ? session('Cart') : [];
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);
        if (count($newCart->products) > 0) {
            $request->session()->put('Cart', $newCart);
        } else {
            $request->session()->forget('Cart');
        }
    }

    public function reloadCartItemInBadge()
    {
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

    public function updateCartQuantity(Request $request)
    {
        if ($request->ajax()) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->updateCartQuantity($request->input('id'), $request->input('quantity'));

            if (count($newCart->products) > 0) {
                $request->session()->put('Cart', $newCart);
            } else {
                $request->session()->forget('Cart');
            }
            return view('frontend.shoppingCart._product-cart-page-step-1');
        }
    }

    public function enterShippingAddress()
    {
        return view('frontend.shoppingCart.card-page-step-2');
    }

    public function updateShippingAddress(Request $request)
    {
        if ($request->input('mode') == self::USE_DIFFERENT_SHIPPING_ADDRESS) {
            $request->validate([
                'customer_name' => 'required',
                'telephone' => 'required',
                'address' => 'required',
                'city' => 'required',
                'country' => 'required',
            ]);
        }

        $orderData = [
            'total_price' => session('Cart')->totalPrice,
            'full_name' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'telephone' => Auth::user()->telephone,
            'email' => Auth::user()->email
        ];
        $order = Order::create($orderData);

        $orderItems = array_map(function ($item) use ($order) {
            return [
                'order_id' => $order->id,
                'product_name' => $item['productInfo']->name,
                'product_quantity' => $item['quantity'],
                'product_price' => $item['price'],
            ];
        }, session('Cart')->products);
        OrderItem::insert($orderItems);

        $shippingData = [
            'order_id' => $order->id,
            'customer_name' => $request->has('customer_name') ? $request->input('customer_name') : Auth::user()->first_name . ' ' . Auth::user()->last_name,
            'telephone' => $request->has('telephone') ? $request->input('telephone') : Auth::user()->telephone,
            'address' => $request->has('address') ? $request->input('address') : Auth::user()->userAddress->address,
            'city' => $request->has('city') ? $request->input('city') : Auth::user()->userAddress->city,
            'country' => $request->has('country') ? $request->input('country') : Auth::user()->userAddress->country,
            'note' => $request->has('note') ? $request->input('note') : '',
        ];
        $shipping = Shipping::create($shippingData);

        if ($shipping)
        {
            $user = Order::findOrFail($order->id);
            Mail::to($user->email)->send(new OrderSuccessMail($user));
        }

        return redirect()->route('frontend.cart.confirm-order');
    }

    public function confirmOrder()
    {
        return view('frontend.shoppingCart.confirm-order');
    }

    public function continueShopping(Request $request)
    {
        if ($request->session()->has('Cart')) {
            $request->session()->forget('Cart');
        }

        return redirect()->route('frontend.index');
    }

}
