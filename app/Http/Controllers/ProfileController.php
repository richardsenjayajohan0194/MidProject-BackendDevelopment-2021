<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    function userProfile(){
        $user = DB::table('users')->where('user_name', session('current_user'))->first();
        return view('profile', [
            "title" => "Profile",
            "user" => $user
        ]);
    }
}
