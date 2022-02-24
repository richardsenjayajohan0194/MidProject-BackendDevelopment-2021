<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/course', function () {
    if(!(session()->has('current_user'))){
        return redirect('/login');
    }
    return view('course', [
        "title" => "Course"
    ]);
});

Route::get('/profile', function () {
    if(!(session()->has('current_user'))){
        return redirect('/login');
    }
    return view('profile', [
        "title" => "Profile"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

Route::post('/register', [RegisterController::class, 'addData']);

Route::get('/login', function () {
    if(session()->has('current_user')){
        return redirect('/');
    }
    return view('login', [
        "title" => "Login",
        "truth" => 0
    ]);
});

Route::post('/login', [LoginController::class, 'userLogin']);

Route::get('/logout', function () {
    if(session()->has('current_user')){
        session()->pull('current_user');
    }
    return redirect('/login');
});
