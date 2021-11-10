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

    public function store(Request $request)
    {
        $student = new StudentController();
        $student->name = $request->all('');

        if($student->save()){

            return $this->responseSuccess('mensaje');
        }
    }

}
