<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRelative;
use App\Models\Student;

class StudentRelativeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('students/insert-studentrelativesinfo');
    }

    public function store(Request $request)
    {
        $studentrelative = StudentRelative::create($request->all());
        return $studentrelative;
        dd($request->all());
        $studentrelative->save();
    }

    public function getStudent(){
        $student = Student::id();
        return response()->json(["student"=>$student]);
    }
}
