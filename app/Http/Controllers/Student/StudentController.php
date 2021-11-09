<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function __construct()
    {

    }

    public function create()
    {
        return view('students/insert-studentsinfo');
    }

}
