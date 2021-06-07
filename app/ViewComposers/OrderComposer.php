<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class OrderComposer
{
    public function compose(View $view)
    {
        $month = date('n');
        return $view->with('itemSold', DB::table('orders_item')
                    ->join('orders', 'orders.id', '=', 'orders_item.order_id')
                    ->whereMonth('orders.updated_at', $month)->sum('product_quantity'));
    }
}
