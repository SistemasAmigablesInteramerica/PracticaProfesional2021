<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GradeSubjectStudent;

class GradeSubjectStudentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('grades/insert-gradesubjectstudentinfo');
    }

    public function store(Request $request)
    {

        $student = Student::create($request->all(''));
        return $student;
        dd($request->all(''));
        $student->save();

    }
}
