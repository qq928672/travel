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
        $foods = DB::table('food_models')->whereIn('type', [1])->get();
        return view('pages.food1', compact('username','foods'));
     }
     public function food1_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $foods = DB::table('food_models')->whereIn('type', [2])->get();
        return view('pages.food1', compact('username','foods'));
     }
     public function food2_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $foods = DB::table('food_models')->whereIn('type', [3])->get();
        return view('pages.food1', compact('username','foods'));
     }
}