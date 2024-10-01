<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use
    App\Http\Controllers\StudentController;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/with/name/url', function () {
    return view('home');
})->name('testhome');

Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about', ['name' => $name]);
});


Route::redirect('/about', '/');

// Route With Controller

Route::get('user', [UserController::class, 'index']);
Route::get('user/{name}', [UserController::class, 'getUsername']);
Route::get('admin', [UserController::class, 'adminLogin']);
Route::view('/user-form', 'user-form');

Route::post('adduser', [UserController::class, 'adduser']);

Route::prefix('student')->group(function () {

    Route::view('/home', 'home');
    Route::view('/about', 'about');
    Route::view('/contact', 'contact');
    Route::view('/services', 'services');
    Route::view('/blog', 'blog');
    Route::view('/single-blog', 'single-blog');
});

// Controller Route with group

// Route::get('show', [StudentController::class, 'show']);
// Route::get('add', [StudentController::class, 'add']);
// Route::get('delete', [StudentController::class, 'delete']);

// Route::controller(StudentController::class)->group(function () {
//     Route::get('show', 'show');
//     Route::get('add', 'add');
//     Route::get('delete', 'delete');
// });

Route::view('middletest', 'middlewarepage')->middleware('check1');

Route::view('blog', 'blog')->middleware(ageCheck::class, CountryCheck::class);
Route::view('contact', 'contact');

Route::get('showstudent', [StudentController::class, 'show']);
