<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Expression;

class EnrollController extends Controller
{
    function enroll1(){
        DB::table('users')->where('user_name', session('current_user'))->update(['course1' =>new Expression('1-course1')]);
        return redirect('/');
    }
    function enroll2(){
        DB::table('users')->where('user_name', session('current_user'))->update(['course2' =>new Expression('1-course2')]);
        return redirect('/');
    }
    function enroll3(){
        DB::table('users')->where('user_name', session('current_user'))->update(['course3' =>new Expression('1-course3')]);
        return redirect('/');
    }
    function enroll4(){
        DB::table('users')->where('user_name', session('current_user'))->update(['course4' =>new Expression('1-course4')]);
        return redirect('/');
    }
}
