<?php

namespace App\Http\Controllers\GradeSubjectStudent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListGradeSubjectStudentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('grades/list-gradesubjectstudentinfo');
    }
}
