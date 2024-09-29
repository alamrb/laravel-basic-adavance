<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about', ['name' => $name]);
});


Route::redirect('/about', '/');

// Route With Controller

Route::get('user', [UserController::class, 'index']);
Route::get('user/{name}', [UserController::class, 'getUsername']);
Route::get('admin', [UserController::class, 'adminLogin']);
