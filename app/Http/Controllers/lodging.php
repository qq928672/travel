<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class lodging extends Controller
{
    public function lodging_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $titles = DB::table('videolists')->get();
        $lodging = DB::table('lodging_models')->get();
        return view('pages.lodging1', compact('username','lodging'));
     }
}
