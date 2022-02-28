<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EnrollController;

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

Route::get('/', [HomeController::class, 'searchUser']);

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
        "title" => "Course",
        "courses" => Course::all()
    ]);
});

//halaman single post (course)
Route::get('courses/{slug}', function($slug) {
    if(!(session()->has('current_user'))){
        return redirect('/login');
    }
    return view('courses', [
         "title" => "Course",
         "course" => Course::find($slug)
      ]);
});

//route to enroll controller
Route::post('courses/1', [EnrollController::class, 'enroll1']);

Route::post('courses/2', [EnrollController::class, 'enroll2']);

Route::post('courses/3', [EnrollController::class, 'enroll3']);

Route::post('courses/4', [EnrollController::class, 'enroll4']);



Route::get('/profile', function () {
    if(!(session()->has('current_user'))){
        return redirect('/login');
    }
    return app(ProfileController::class)->userProfile();
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
