<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class local_food extends Controller
{
    public function local_food_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $foods = DB::table('food_models')->whereIn('type', [2])->get();
        return view('pages.food2', compact('username','foods'));
     }
}
