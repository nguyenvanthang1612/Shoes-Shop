<?php

namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CustomerComposer
{
    public function compose(View $view)
    {
        return $view->with('allCustomer', DB::table('users')->where('role', 3)->count());
    }
}


