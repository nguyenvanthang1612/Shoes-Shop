<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Cache::remember('categories', 24 * 60 * 60, function () {
            return Category::all();
        });
        return $view->with('categories', $categories);
    }
}
