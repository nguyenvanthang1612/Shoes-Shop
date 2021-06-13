<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccountCreate;
use App\Http\Requests\Admin\AccountEdit;
use App\Http\Requests\Admin\ChangePassword;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // admin table
    public function adminIndex()
    {
        $accounts = DB::table('users')->where('role', 2)->paginate(10);
        return view('backend.account.admin', [
            'accounts' => $accounts
        ]);
    }

    // client table
    public function clientIndex()
    {
        $accounts = DB::table('users')->where('role', 3)->paginate(10);
        return view('backend.account.client', [
            'accounts' => $accounts
        ]);
    }

    // admin create form
    public function showCreateAccountForm()
    {
        return view('backend.account.create');
    }

    // action admin create form
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

    // edit form
    public function edit()
    {
        $account = User::findOrFail(auth()->id());
        return view('backend.account.edit', [
            'account' => $account
        ]);
    }

    // action edit form
    public function update(AccountEdit $request, $id)
    {
        [$file, $fileName] = $this->upload($request);
        $account = User::findOrFail($id);
        $account->update(array_merge($request->input(), ['avatar' => $fileName]));
        if ($account)
        {
            if ($request->hasFile('avatar')) {
                $file->storeAs('', $fileName, 'account');
            }
            return redirect('/admin');
        }
    }

    // upload avatar
    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            return [$file, $fileName];
        }
        return [null, $request->input('avatar')];
    }

    // delete admin
    public function destroy($id)
    {
        $product = User::findOrFail($id);
        $result = $product->delete($id);
        return  redirect('/admin/account/admin_management');
    } 

    // change password form
    public function showChangePasswordForm()
    {
       $account = User::findOrFail(auth()->id());
       return view('backend.account.change-password', [
        'account' => $account
       ]);
    }

    // change password
    public function changePassword(ChangePassword $request)
    {
        User::findOrFail(auth()->id())->update(['password'=> $request->input('new_password')]);
        return redirect('/admin');
    }

    // search admin account
    public function searchAdmin(Request $request)
    {
        $searchText = $request->input('search');
        $accounts = DB::table('users')
                    ->where('role', 2)
                    ->where('user_name', 'LIKE', '%'.$searchText.'%')
                    ->paginate(10);
        $accounts->appends(['search' => $searchText]);
        return view('backend.account.admin', [
            'accounts' => $accounts
        ]);
    }

    // search client account
    public function searchClient(Request $request)
    {
        $searchText = $request->input('search');
        $accounts = DB::table('users')
                    ->where('role', 3)
                    ->where('user_name', 'LIKE', '%'.$searchText.'%')
                    ->paginate(10);
        $accounts->appends(['search' => $searchText]);
        return view('backend.account.client', [
            'accounts' => $accounts
        ]);
    }
}
