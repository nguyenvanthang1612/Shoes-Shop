<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $month = date('n');
        $clientAccount = DB::table('users')->where('role', 3)->whereMonth('updated_at', $month)->count();
        $totalEarning = DB::table('orders')->whereMonth('updated_at', $month)->sum('total_price');
        $orders = DB::table('orders')->whereMonth('updated_at', $month)->count();
        $orderItem = DB::table('orders_item')
            ->join('orders', 'orders.id', '=', 'orders_item.order_id')
            ->select('orders_item.*', 'orders.updated_at')
            ->whereMonth('orders.updated_at', $month)
            ->sum('product_quantity');
        return view('backend.index', [
            'clientAccount' => $clientAccount,
            'totalEarning' => $totalEarning,
            'orders' => $orders,
            'orderItem' => $orderItem
        ]);
    }
}
