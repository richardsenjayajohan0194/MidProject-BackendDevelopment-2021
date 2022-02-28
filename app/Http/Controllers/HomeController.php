<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function searchUser(){
        if(!(session()->has('current_user'))){
            return view('home', [
                "title" => "Home"
            ]);
        }
        $user = DB::table('users')->where('user_name', session('current_user'))->first();
        return view('home', [
            "title" => "Home",
            "user" => $user
        ]);
    }
}
