<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreate;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blogIndex()
    {
        $blogs = DB::table('blogs')
                ->join('users', 'users.id', '=', 'blogs.user_id')
                ->select('blogs.*', 'users.user_name')
                ->orderBy('blogs.id', 'asc')
                ->paginate(10);

        return view('backend.blogs.all-blogs', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        $users = User::all()->where('role', '2');
        return view('backend.blogs.create-blogs', [
            'users' => $users
        ]);
    }

    public function store(BlogCreate $request)
    {
        $blogs = Blog::create($request->input());
        return redirect('/admin/dashboard/blog');
    }

    public function status_update($id)
    {
        //get product status with the help of product ID
        $blog = DB::table('blogs')
                    ->select('status')
                    ->where('id','=',$id)
                    ->first();

        //Check user status
        if($blog->status == '0'){
            $status = '1';
        }else{
            $status = '0';
        }

        //update blog status
        $values = array('status' => $status );
        DB::table('blogs')->where('id',$id)->update($values);
        return redirect('admin/dashboard/blog');
    }
}
