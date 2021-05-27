<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class WebIndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function edit()
    {
        $userData = User::findOrFail(auth()->id());
        return view('frontend.authenticate.edit-page',[
            'userData' => $userData,
        ]);
    }

    public function update(Request $request, $id)
    {
        $userData = User::findOrFail($id)->update($request->input());
        if($userData){
            return redirect("/user/index-page/$id");
        }

    }


    public function mainUserIndex($id)
    {
        $users = DB::table('users')
        ->join('user_address', 'users.id', '=' , 'user_address.user_id')
        ->select('users.*','user_address.address','user_address.city','user_address.country','user_address.telephone','user_address.user_id')
        ->where('users.id' , $id)->get();
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


