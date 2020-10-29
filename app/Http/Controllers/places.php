<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class places extends Controller
{
    public function places_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $titles = DB::table('videolists')->get();
        return view('pages.places1', compact('username', 'titles'));
        
    }
}