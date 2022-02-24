<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function userLogin(Request $req){
        $req->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        $cari = $req->user_name;
        $user = DB::table('users')->where('user_name', $cari)->first();
        $pass = $req->password;
        if ((strcmp($pass, $user->password)) == 0){
            //$tempname = $user->user_name;
            session(['current_user' => $user->user_name]);
            return redirect('/');
        }
        else{
            return view('/login', ["title" => "Login", "truth" => 1]);
        }
    }
}
