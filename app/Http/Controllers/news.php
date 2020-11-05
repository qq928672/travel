<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class news extends Controller
{
    public function news_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $news = DB::table('news_models')->get();
        return view('pages.index', compact('username','news'));
     }
}
