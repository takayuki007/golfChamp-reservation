<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoneController extends Controller
{
    //予約完了ページを表示
    public function index(){
        return view('done');
    }
}
