<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebIndexController extends Controller
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
        $data = array_merge(['role' => 3], request()->input());
        $user = User::create($data);
        if($user){
            Auth::login($user);
            return redirect('/');
        }
    }
}
