<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccountCreate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function adminIndex()
    {
        $accounts = DB::table('users')->where('role', 2)->get();
        return view('backend.account.admin', [
            'accounts' => $accounts
        ]);
    }

    public function clientIndex()
    {
        $accounts = DB::table('users')->where('role', 3)->get();
        return view('backend.account.client', [
            'accounts' => $accounts
        ]);
    }

    public function showCreateAccountForm()
    {
        return view('backend.account.create');
    }

    public function createAccountAdmin(AccountCreate $request)
    {
        $hashingPassword = bcrypt('password');
        [$file, $fileName] = $this->upload($request);
        $account = User::create(array_merge(['avatar' => $fileName, 'role' => 2, 'password' => $hashingPassword], $request->input()));
        if ($account)
        {
            $file->storeAs('', $fileName, 'account');
            return redirect('/admin/account/admin_management');
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            return [$file, $fileName];
        }
        return [null, $request->input('avatar')];
    }
}
