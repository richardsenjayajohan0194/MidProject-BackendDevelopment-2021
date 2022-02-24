<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //add data
    function addData(Request $req){

        $req->validate([
            'full_name' => 'nullable|min:10|max:45',
            'user_name' => 'required|unique:users|min:3|max:15',
            'password' => ['required', 'unique:users', 'min:8', 'max:20', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/'],
            'confirm_password' => 'required|same:password',
            'address' => 'nullable',
            'phone_number' => 'nullable',
            'age' => 'nullable|gt:0',
            'birthdate' => 'nullable'
        ]);

        $user = new User;
        $user->full_name=$req->full_name;
        $user->user_name=$req->user_name;
        $user->password=$req->password;
        $user->address=$req->address;
        $user->phone_number=$req->phone_number;
        $user->age=$req->age;
        $user->birthdate=$req->birthdate;
        $user->save();
        return redirect('/login');
    }
}
