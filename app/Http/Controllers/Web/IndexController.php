<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        $latestProducts = Product::latest()->take(5)->get();
        $featureProducts = Product::latest()->take(10)->get();
        return view('frontend.index', compact('products', 'latestProducts', 'featureProducts'));
    }

    public function edit()
    {
        $userData = User::findOrFail(auth()->id());
        return view('frontend.authenticate.edit-page',[
            'userData' => $userData,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')->ignore(Auth::user()->id)],
            'telephone' => 'required'
        ]);
        $userData = Auth::user()->update($request->input());
        if ($userData) {
            return redirect()->route('frontend.index.main-user-index');
        }

    }


    public function mainUserIndex()
    {
        $users = DB::table('users')
        ->join('user_address', 'users.id', '=' , 'user_address.user_id')
        ->select('users.*','user_address.address','user_address.city','user_address.country','user_address.telephone','user_address.user_id')
        ->where('users.id', Auth::user()->id)->get();
        return view('frontend.authenticate.index-page',compact('users'));
    }

    public function addressEdit($id)
    {
        $userAddressData = UserAddress::findOrFail($id);
        return view('frontend.authenticate.address-edit-page',[
            'userAddressData' => $userAddressData,
        ]);
    }

    public function addressUpdate(Request $request, $id)
    {
        $userAddressData = UserAddress::findOrFail($id)->update($request->input());
        if($userAddressData ){
            return redirect("/");
        }
    }
}


