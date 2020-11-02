<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class art_places extends Controller
{
    public function art_places_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $posts = DB::table('places_models')->whereIn('type', [3])->get();
        return view('pages.places3', compact('username','posts'));
    }
}
