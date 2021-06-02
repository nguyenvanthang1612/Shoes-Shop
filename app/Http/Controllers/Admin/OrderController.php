<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function showOrder()
    {
        $orders = DB::table('orders')
            ->join('orders_item', 'orders.id', '=', 'orders_item.order_id')
            ->select('orders.id', 'orders.email', 'orders.buy_at', 'orders.total_price', 'orders_item.order_id')
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('backend.order.allOrder', [
            'orders' => $orders
        ]);
    }

}
