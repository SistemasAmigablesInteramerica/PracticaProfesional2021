<?php

namespace App\Http\Controllers\GradeSubjectStudent;

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

        $gradesubjectstudent = GradeSubjectStudent::create($request->all(''));
        return $gradesubjectstudent;
        dd($request->all(''));
        $gradesubjectstudent->save();

    }
}
