<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\SubcribeMail;
use App\Models\SubcribeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubcribeEmailController extends Controller
{
    // public function nameAndEmailToSend()
    // {
    //     return view('frontend.index');
    // }
    public function sendMail(Request $request)
    {
        $user_create = SubcribeEmail::create([
            'name' => $request->input('subcribe_name'),
            'email' => $request->input('subcribe_email'),
        ]);

        if ($user_create)
        {
            $user = SubcribeEmail::findAll($request->id);
            Mail::to($request->user())->send(new SubcribeMail($user));

            // return back()->with('message', 'đã gửi mail');
        }
    }
}
