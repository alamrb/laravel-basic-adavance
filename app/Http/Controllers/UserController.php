<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // return  view('user');
        $users =  DB::select('select * from users');
        return view('user', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getUsername($name)
    {
        return view("user", ['name' => $name]);
    }

    public function adminLogin()
    {

        if (View::exists('admin.login1')) {
            $name = "alam";
            $users = ['anil', 'sam', 'peter'];
            return view('admin.login1', ['name' => $name, 'users' => $users]);
        } else {
            return "Admin login view not found!";
        }
    }

    public function adduser(Request $request)
    {

        $request->validate([
            'username' => 'required|string|min:5|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'email' => 'required',
            // 'password' => 'required|string|min:8|confirmed',
            'skill' => 'required|array|min:1',
            'city' => 'required | uppercase'
        ], [
            'username.required' => 'username can not be Empty',
            'username.min' => 'username should be at least 5 characters',
            'username.max' => 'username should not exceed 255 characters',
            // 'email.required' => 'email can not be empty',
            // 'email.email' => 'email should be valid',
            'email.unique' => 'email should be unique',
        ]);

        // echo "$request->username";
        return  $request;
        // print_r($request->skill);
    }
}
