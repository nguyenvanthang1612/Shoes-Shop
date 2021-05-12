<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function create()
    {
        return view('frontend.authenticate.register-page');
    }
    public function store(Request $request)
    {
        $user = User::create($request->input());
        if($user){
            return redirect('/');
        }
    }





}
