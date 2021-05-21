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

    public function create()
    {
        return view('frontend.authenticate.register-page');
    }

    public function edit($id)
    {
        $userData = User::findOrFail($id);
        return view('frontend.authenticate.edit-page',[
            'userData' => $userData,
        ]);
    }

    public function update($id,Request $request)
    {
        $userData = User::findOrFail($id)->update($request->input());
        if($userData){
            return redirect('user/$userData->id/index-page');
        }

    }

    public function store(Request $request)
    {
        $userData = array_merge($request->except(['address','city','country']), ['role' => 3]);
        $user = User::create($userData);
        $addressData = array_merge($request->only(['address','city','country', 'telephone']), ['user_id' => $user->id]);
        UserAddress::create($addressData);

        if($user){
            Auth::login($user);
            return redirect('/');
        }
    }

    public function mainUserIndex($id)
    {
        $users = DB::table('users')
        ->join('user_address', 'users.id', '=' , 'user_address.user_id')
        ->select('users.*','user_address.address')
        ->where('users.id' , $id)->get();
        return view('frontend.authenticate.index-page',compact('users'));
    }






}


