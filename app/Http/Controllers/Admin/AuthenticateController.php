<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function showLoginForm()
    {
        return view('backend.authenticate.login');
    }
}
