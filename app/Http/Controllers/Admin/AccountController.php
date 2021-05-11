<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function showCreateAccountForm()
    {
        return view('backend.account.create');
    }
}
