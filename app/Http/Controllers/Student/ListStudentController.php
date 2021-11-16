<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListStudentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('students/list-studentsinfo');
    }

    
}
