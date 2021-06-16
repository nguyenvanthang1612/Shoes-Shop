<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\LoginRequest;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function showLoginForm()
    {
        return view('frontend.layouts._footer');
    }

    public function login(LoginRequest $request)
    {
        $canUserLogin = Auth::attempt([
            'role' => '3',
            'user_name' => $request->input('user_name'),
            'password' => $request->input('password')
        ]);

        if ($request->ajax()) {
            if ($canUserLogin) {
                return response()->json(['user' => Auth::user()], 200);
            } else {
                return response()->json(['message' => 'Đăng nhập thất bại'], 500);
            }
        } else {
            if ($canUserLogin) {
                return redirect()->back();
            } else {
                return redirect()->back()->with('failure', 'Đăng nhập thất bại');
            }
        }
    }

    public function showRegisterForm()
    {
        return view('frontend.authenticate.register-page');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'user_name' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:users,email|email',
                'password' => 'required|confirmed',
                'address' => 'required',
                'city' => 'required',
                'country' => 'required',
                'telephone' => 'required|numeric'
            ]
        );


        $userData = array_merge($request->except(['address', 'city', 'country', 'password_confirmation']), ['role' => 3]);
        $user = User::create($userData);
        $addressData = array_merge($request->only(['address', 'city', 'country']), ['user_id' => $user->id]);
        UserAddress::create($addressData);

        if ($user) {
            Auth::login($user);
            return redirect()->route('frontend.index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.index');
    }
}
