<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function showOrder()
    {
        $orders = DB::table('orders')
            ->select('orders.id', 'orders.email', 'orders.buy_at', 'orders.total_price', 'orders.full_name', 'orders.telephone')
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('backend.order.all-order', [
            'orders' => $orders
        ]);
    }

    public function showOrderItem()
    {
        $orders = DB::table('orders_item')
        ->join('orders', 'orders.id', '=', 'orders_item.order_id')
        ->select('orders_item.*', 'orders.id')
        ->orderBy('orders.id', 'asc')
        ->paginate(10);
        
        return view('backend.order.all-order-item', [
                        'orders' => $orders
                    ]);

    }

    public function showShipping()
    {
        $orders = DB::table('shipping')
        ->join('orders', 'orders.id', '=', 'shipping.order_id')
        ->select('shipping.*', 'orders.id', 'orders.email', 'orders.total_price')
        ->orderBy('orders.id', 'asc')
        ->paginate(10);
        
        return view('backend.order.all-shipping', [
                        'orders' => $orders
                    ]);

    }

    public function searchOrder(Request $request)
    {
        $searchText = $request->input('search');
        $orders = DB::table('orders')
            ->select('orders.id', 'orders.email', 'orders.buy_at', 'orders.total_price', 'orders.full_name', 'orders.telephone')
            ->orderBy('id', 'asc')
            ->where('full_name', 'LIKE', '%'.$searchText.'%')
            ->paginate(10);
        $orders->appends(['search' => $searchText]);
        return view('backend.order.all-order', [
            'orders' => $orders
        ]);
    }

    public function searchOrderItem(Request $request)
    {
        $searchText = $request->input('search');
        $orders = DB::table('orders_item')
        ->join('orders', 'orders.id', '=', 'orders_item.order_id')
        ->select('orders_item.*', 'orders.id')
        ->orderBy('orders.id', 'asc')
        ->where('product_name', 'LIKE', '%'.$searchText.'%')
        ->paginate(10);
        $orders->appends(['search' => $searchText]);
        return view('backend.order.all-order-item', [
                        'orders' => $orders
                    ]);
    }

    public function searchShipping(Request $request)
    {
        $searchText = $request->input('search');
        $orders = DB::table('shipping')
        ->join('orders', 'orders.id', '=', 'shipping.order_id')
        ->select('shipping.*', 'orders.id', 'orders.email', 'orders.total_price')
        ->orderBy('orders.id', 'asc')
        ->where('customer_name', 'LIKE', '%'.$searchText.'%')
        ->paginate(10);
        $orders->appends(['search' => $searchText]);
        return view('backend.order.all-shipping', [
                        'orders' => $orders
                    ]);
    }

}
