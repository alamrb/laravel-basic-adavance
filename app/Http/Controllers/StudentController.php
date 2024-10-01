<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    //

    public function show()
    {
        $sutents = Student::all();
        return  view('student', ['datas' => $sutents]);
    }

    public function add()
    {
        return 'List of students add';
    }

    public function delete()
    {
        return 'List of students delete';
    }
}
