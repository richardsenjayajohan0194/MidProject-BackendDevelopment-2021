<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;



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
    return view('course', [
        "title" => "Course",
        "courses" => Course::all()
    ]);
});

//halaman single post (course)
Route::get('courses/{slug}', function($slug) {
      return view('courses', [
         "title" => "course",
         "course" => Course::find($slug)
      ]);
});




Route::get('/profile', function () {
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

