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

    //プロフィールの更新
    public function update(Request $request)
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        //画像が変更されているかチェック
        if (!empty($request->file('img'))){
            //バリデーション
            $request->validate([
                'img'=>'nullable|file|mimes:jpeg,png,jpg|max:1000',
            ]);
            //画像のパスを変数に代入。
            $path = $request->file('img')->store('public/profile_img');
            //登録項目を代入。
            $profile->img = basename($path);
        }

        //ゴルフ歴が変更されているかチェック！
        if (!empty($request->golf_id)){
            //バリデーション
            $request->validate([
                'golf_id'=>'nullable',
            ]);
            //登録項目を代入。
            $profile->golf_history_id = $request->golf_id;
        }

        //備考が変更されているかチェック！
        if (!empty($request->note)){
            //バリデーション
            $request->validate([
                'note'=>'nullable|string|max:200'
            ]);
            //登録項目を代入。
            $profile->note = $request->note;
        }else{
            $profile->note = null;
        }

        //保存
        $profile->save();

        return redirect('/home');

    }

}
