<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.layouts._footer');
    }

    public function login(Request $request)
    {
        if ($request->ajax()) {
            if(Auth::attempt([
                'role' => '3',
                'user_name' => $request->input('user_name'),
                'password' => $request->input('password')
            ]))
            {

                return response()->json(['user' => Auth::user()], 200);
            }
            else{
                return response()->json(['message' => 'Đăng nhập thất bại'], 500);
            }
        }
    }
}
