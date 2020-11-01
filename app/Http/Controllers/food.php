<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class food extends Controller
{
    public function food_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $titles = DB::table('videolists')->get();
        $foods = DB::table('food_models')->get();
        return view('pages.food1', compact('username','foods'));
     }
}