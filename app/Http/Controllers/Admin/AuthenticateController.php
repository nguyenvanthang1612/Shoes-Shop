<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function showLoginForm()
    {
        return view('backend.authenticate.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt([
            'role' => '1',
            'user_name' => $request->input('user_name'), 
            'password' => $request->input('password')
        ])) {
            return redirect('/admin');
        }
        else if (Auth::attempt([
            'role' => '2',
            'user_name' => $request->input('user_name'), 
            'password' => $request->input('password')
        ])) {
            return redirect('/admin');
        }
        else {
            return 'fail';
        } 
    }
}
