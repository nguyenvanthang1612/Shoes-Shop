<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AuthenticateController extends Controller
{
    public function showLoginForm()
    {
        return view('backend.authenticate.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'user_name' => 'required',
            'password' => 'required|min:6',
            'remember_token' => 'accepted'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
        {
            return redirect('/admin/auth/login')->withErrors($validator)->withInput();
        }
        else
        {
            if (Auth::attempt([
                'role' => '1',
                'user_name' => $request->input('user_name'), 
                'password' => $request->input('password')
            ], true)) {
                return redirect('/admin');
            }
            else if (Auth::attempt([
                'role' => '2',
                'user_name' => $request->input('user_name'), 
                'password' => $request->input('password')
            ], true)) {
                return redirect('/admin');
            }
            else {
                Session::flash('error', 'Your username or password is incorrect!');
                return redirect('/admin/auth/login');
            } 
        }
    }
}
