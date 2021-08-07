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
        $users = DB::table('users')->select('users.*')->where('role', '1')->orWhere('role', '2')->get();
        return view('backend.blogs.create-blogs', [
            'users' => $users
        ]);
    }

    public function store(BlogCreate $request)
    {
        [$file, $fileName] = $this->upload($request);
        $blogs = Blog::create(array_merge(['image' => $fileName], $request->input()));
        if ($blogs)
        {
            $file->storeAs('', $fileName, 'blog');
            return redirect('/admin/dashboard/blog');
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            return [$file, $fileName];
        }
        return [null, $request->input('image')];
    }

    public function show($id)
    {
        $users = DB::table('users')->select('users.*')->where('role', '1')->orWhere('role', '2')->get();
        $blog = DB::table('blogs')
                ->join('users', 'users.id', '=', 'blogs.user_id')
                ->select('blogs.*', 'users.user_name')
                ->where('blogs.id', $id)
                ->first();
        return view('backend.blogs.show-blogs', [
            'users' => $users,
            'blog' => $blog
        ]);
    }

    public function edit($id)
    {
        $users = DB::table('users')->select('users.*')->where('role', '1')->orWhere('role', '2')->get();
        $blog = DB::table('blogs')
                ->join('users', 'users.id', '=', 'blogs.user_id')
                ->select('blogs.*', 'users.user_name')
                ->where('blogs.id', $id)
                ->first();
        return view('backend.blogs.edit-blogs', [
            'users' => $users,
            'blog' => $blog
        ]);
    }

    public function update(Request $request, $id)
    {
        $imageName = $request->input('image');
        $image = $request->file('image');
        $blog = Blog::findOrfail($id);
        $blog->update(array_merge($request->input(), ['image' => $imageName]));
        if ($blog)
        {
            if ($request->hasFile('image')) 
            {
                $image->storeAs('', $image->getClientOriginalName(), 'blog');
            }
            return redirect('/admin/dashboard/blog');
        }
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $result = $blog->delete($id);
        return  redirect()->back();
    }

    public function search(Request $request)
    {
        $searchText = $request->input('search');
        $blogs = DB::table('blogs')
            ->select('orders.*')
            ->orderBy('id', 'asc')
            ->where('title', 'LIKE', '%'.$searchText.'%')
            ->paginate(10);
        $blogs->appends(['search' => $searchText]);
        return view('backend.blogs.all-blogs', [
            'blogs' => $blogs
        ]);
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
