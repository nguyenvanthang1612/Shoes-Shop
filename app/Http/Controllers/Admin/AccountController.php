<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccountCreate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // public function adminAvatar()
    // {
    //     $accounts = DB::table('users')->where('role', 2)->get();
    //     return view('backend.layouts._header', [
    //         'accounts' => $accounts
    //     ]);
    // }

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
        $hashingPassword = Hash::make($request->input('password'));
        [$file, $fileName] = $this->upload($request);
        $account = User::create(array_merge(['avatar' => $fileName, 'role' => 2, 'password' => $hashingPassword], $request->input()));
        if ($account)
        {
            $file->storeAs('', $fileName, 'account');
            return redirect('/admin/account/admin_management');
        }
    }

    public function edit($id)
    {
        $account = User::findOrFail($id);
        return view('backend.account.edit', [
            'account' => $account
        ]);
    }

    public function linkEditAccount()
    {
        return view('backend.layouts._header');
    }

    public function update(Request $request, $id)
    {
        [$file, $fileName] = $this->upload($request);
        $account = User::findOrFail($id);
        $account->update(array_merge($request->input, ['avatar' => $fileName]));
        if ($account)
        {
            if ($request->hasFile('avatar')) {
                $file->storeAs('', $fileName, 'account');
            }
            return redirect('admin/account/admin_management');
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

    public function destroy($id)
    {
        $product = User::findOrFail($id);
        $result = $product->delete($id);
        return  redirect('/admin/account/admin_management');
    } 
}
