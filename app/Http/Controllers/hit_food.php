<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hit_food extends Controller
{
    public function hit_food_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $foods = DB::table('food_models')->whereIn('type', [3])->get();
        return view('pages.food3', compact('username','foods'));
     }
}
