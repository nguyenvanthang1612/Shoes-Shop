<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // data
        $month = date('n');
        $year = date('Y');
        $clientAccount = DB::table('users')->where('role', 3)->whereMonth('updated_at', $month)->count();
        $totalEarning = DB::table('orders')->whereMonth('updated_at', $month)->sum('total_price');
        $orders = DB::table('orders')->whereMonth('updated_at', $month)->count();
        $orderItem = DB::table('orders_item')
            ->join('orders', 'orders.id', '=', 'orders_item.order_id')
            ->select('orders_item.*', 'orders.updated_at')
            ->whereMonth('orders.updated_at', $month)
            ->sum('product_quantity');
        // chart
        $monthData = Order::select(DB::raw("MONTH(buy_at) as month"))
                    ->whereYear('buy_at', $year)
                    ->groupBy(DB::raw("MONTH(buy_at)"))
                    ->pluck('month');
                    
        $totalEarningData = Order::select(DB::raw("SUM(total_price) as total_price"))
                    ->whereYear('buy_at', $year)
                    ->groupBy(DB::raw("MONTH(buy_at)"))
                    ->pluck('total_price');
        // view
        return view('backend.index', [
            'monthData' => $monthData,
            'totalEarningData' => $totalEarningData,
            'clientAccount' => $clientAccount,
            'totalEarning' => $totalEarning,
            'orders' => $orders,
            'orderItem' => $orderItem
        ]);

        
    }
}
