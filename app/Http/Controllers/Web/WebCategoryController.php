<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WebCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.layouts._nav', compact('categories'));
    }
}
