<?php

namespace App\Http\Controllers;

use App\History;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //プロフィールの新規登録画面表示
    public function index()
    {
        $histories = History::get();
        return view('profile/index',['histories'=>$histories]);
    }

    //プロフィールの新規登録処理
    public function store(Request $request)
    {
        $request->validate([
            'img'=>'required|file|mimes:jpeg,png,jpg|max:1000',
            'golf_id'=>'required',
            'note'=>'nullable|string|max:200'
        ]);

        $profile = new Profile;
        $path = $request->file('img')->store('public/profile_img');
        $profile->img = basename($path);
        $profile->golf_history_id = $request->golf_id;
        $profile->note = $request->note;
        $profile->user_id = Auth::id();

        $profile->save();

        return redirect('/home');
    }

    //プロフィールの編集画面表示
    public function edit()
    {
        $histories = History::get();
        $profile = Profile::where('user_id', Auth::id())->first();
        $golfHis = History::where('id', $profile->golf_history_id)->first();
        return view('profile/edit',['histories'=>$histories, 'profile'=>$profile, 'golfHis'=>$golfHis]);
    }

}
