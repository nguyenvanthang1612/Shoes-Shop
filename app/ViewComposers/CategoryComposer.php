<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        return $view->with('categories', Category::all());
    }
}
