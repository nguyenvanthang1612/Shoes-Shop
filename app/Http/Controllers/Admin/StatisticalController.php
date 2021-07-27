<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticalController extends Controller
{
    public function showStatistical()
    {
        $month = date('n');
        $totalEarning = DB::table('orders')->whereMonth('buy_at', $month)->sum('total_price');
        return view('backend.statistical.statistical', [
            'month' => $month,
            'totalEarning' => $totalEarning,
        ]);
    }
}
