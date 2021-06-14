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

        $chartData = Order::select([DB::raw("MONTH(buy_at) as month"), DB::raw("SUM(total_price) as total_price")])
                    ->whereYear('buy_at', $year)
                    ->groupBy(DB::raw("MONTH(buy_at)"))->get()->toArray();
        $data = array_column($chartData, 'total_price', 'month');
 
        $monthWithEarnings = [];
        for ($i = 1; $i <= 12; $i++) {
            if (in_array($i, array_keys($data))) {
                $monthWithEarnings[$i] = $data[$i];
            } else {
                $monthWithEarnings[$i] = 0;
            }
        }
        
        return view('backend.index', [
            'monthData' => array_keys($monthWithEarnings),
            'totalEarningData' => array_values($monthWithEarnings),
            'clientAccount' => $clientAccount,
            'totalEarning' => $totalEarning,
            'orders' => $orders,
            'orderItem' => $orderItem
        ]);

        
    }
}
