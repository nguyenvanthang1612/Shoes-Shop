<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AuthenticateController extends Controller
{
    // login form
    public function showLoginForm()
    {
        return view('backend.authenticate.login');
    }

    // action login form
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required',
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
                'email' => $request->input('email'), 
                'password' => $request->input('password')
            ], $request->remember_token ? true : false)) {
                return redirect('/admin');
            }
            else if (Auth::attempt([
                'role' => '2',
                'email' => $request->input('email'), 
                'password' => $request->input('password')
            ], $request->remember_token ? true : false)) {
                return redirect('/admin');
            }
            else {
                Session::flash('error', 'Your email or password is incorrect!');
                return redirect('/admin/auth/login');
            } 
        }
    }
}
