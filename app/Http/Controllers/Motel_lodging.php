<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Motel_lodging extends Controller
{
    public function Motel_lodging_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $lodging = DB::table('lodging_models')->whereIn('type', [3])->get();
        return view('pages.lodging3', compact('username','lodging'));
     }
}
