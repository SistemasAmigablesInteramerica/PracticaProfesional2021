<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

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

    public function store(Request $request)
    {

        $student = Student::create($request->all());
        return $result;
        dd($request->all());
        $student->save();

    }

}
