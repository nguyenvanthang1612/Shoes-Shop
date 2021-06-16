<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubcribeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcribeController extends Controller
{
    public function index()
    {
        $subcribes = SubcribeEmail::paginate(10);
        return view('backend.subcribe.subcribe', [
            'subcribes' => $subcribes
        ]);
    }

    public function search(Request $request)
    {
        $searchText = $request->input('search');
        $subcribes = DB::table('subcribe')
                    ->where('name', 'LIKE', '%'.$searchText.'%')
                    ->paginate(10);
        $subcribes->appends(['search' => $searchText]);
        return view('backend.subcribe.subcribe', [
            'subcribes' => $subcribes
        ]);
    }
}
