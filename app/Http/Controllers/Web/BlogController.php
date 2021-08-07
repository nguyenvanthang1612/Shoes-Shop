<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $month = date('n');
        $itemSold = DB::table('orders')->whereMonth('updated_at', $month)->count();
        $allCustomer = DB::table('users')->where('role', '3')->count();
        $allProduct = DB::table('products')->join('inventories', 'inventories.id', '=', 'products.inventory_id')->sum('inventories.quantity');
        $blogs = DB::table('blogs')->paginate(10);
        return view('frontend.blog.all-blogs', [
            'blogs' => $blogs,
            'itemSold' => $itemSold,
            'allCustomer' => $allCustomer,
            'allProduct' => $allProduct
        ]);
    }

    public function blogDetail($id)
    {
        $users = DB::table('users')->select('users.*')->where('role', '1')->orWhere('role', '2')->get();
        $blog = DB::table('blogs')
                ->join('users', 'users.id', '=', 'blogs.user_id')
                ->select('blogs.*', 'users.user_name')
                ->where('blogs.id', $id)
                ->first();
        return view('frontend.blog.blog-detail', [
            'users' => $users,
            'blog' => $blog
        ]);
    }


}
