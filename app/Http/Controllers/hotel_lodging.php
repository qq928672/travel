<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hotel_lodging extends Controller
{
    public function hotel_lodging_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $titles = DB::table('videolists')->get();
        $lodging = DB::table('lodging_models')->whereIn('type', [2])->get();
        return view('pages.lodging2', compact('username','lodging'));
     }
}
