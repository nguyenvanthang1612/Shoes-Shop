<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


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
            'email' => 'required|email',
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

    // show forgot password form
    public function forgotPasswordForm()
    {
        return view('backend.authenticate.forgot-password');
    }

    // forgot password
    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink([
            'email' => $request->input('email'),
        ]);

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    // show reset password form
    public function resetPasswordForm($token)
    {
        return view('backend.authenticate.reset-password', compact('token'));
    }

    // reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);


        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => $password
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );


        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('admin.login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

}
