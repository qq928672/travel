<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Sp_places extends Controller
{
    public function Sp_places_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $posts = DB::table('places_models')->whereIn('type', [2])->get();
        return view('pages.places2', compact('username','posts'));
    }
}