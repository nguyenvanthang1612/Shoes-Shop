<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('backend.order.order', [
            'orders' => $orders
        ]);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.order.detail', [
            'order' => $order
        ]);
    }
}
