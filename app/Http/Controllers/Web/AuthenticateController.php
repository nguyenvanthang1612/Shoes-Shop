<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAddress;
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

    public function showRegisterForm()
    {
        return view('frontend.authenticate.register-page');
    }

    public function register(Request $request)
    {
        $userData = array_merge($request->except(['address', 'city', 'country']), ['role' => 3]);
        $user = User::create($userData);
        $addressData = array_merge($request->only(['address', 'city', 'country', 'telephone']), ['user_id' => $user->id]);
        UserAddress::create($addressData);

        if ($user) {
            Auth::login($user);
            return redirect()->route('register');
        }
    }
}
