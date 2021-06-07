<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class AllProductComposer
{
    public function compose(View $view)
    {
        return $view->with('allProduct', DB::table('products')
                    ->join('inventories', 'products.inventory_id', '=', 'inventories.id')
                    ->sum('quantity')
        );
    }
}
