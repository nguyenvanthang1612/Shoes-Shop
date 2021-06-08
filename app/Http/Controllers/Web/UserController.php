<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function editProfile(Request $request)
    {
        $user = Auth::user();
        $userAddress = UserAddress::where('user_id', Auth::user()->id)->firstOrNew();

        return view('frontend.user.edit-profile', compact('user', 'userAddress'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => ['required', Rule::unique('users', 'email')->ignore(Auth::user()->id)],
            ]
        );

        Auth::user()->update($request->only(['first_name', 'last_name', 'email', 'telephone']));
        UserAddress::updateOrCreate(['user_id' => Auth::user()->id], $request->only(['address', 'city', 'country']));

        return redirect()->route('frontend.index');
    }
}
