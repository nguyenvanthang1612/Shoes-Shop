<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // category table
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.category', [
            'categories' => $categories
        ]);
    }
}
