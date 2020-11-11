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
        $lodging = DB::table('lodging_models')->whereIn('type', [1])->get();
        return view('pages.lodging1', compact('username','lodging'));
     }
     public function lodging1_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $lodging = DB::table('lodging_models')->whereIn('type', [2])->get();
        return view('pages.lodging1', compact('username','lodging'));
     }
     public function lodging2_page(){
        $username = "Guest";
        if (Auth::check()) {
            $user = Auth::user();
            $username = $user->name;
        }
        $lodging = DB::table('lodging_models')->whereIn('type', [3])->get();
        return view('pages.lodging1', compact('username','lodging'));
     }
}
