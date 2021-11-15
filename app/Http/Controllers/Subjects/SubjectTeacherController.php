<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectTeacher;

class SubjectTeacherController extends Controller
{
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        return view('subjects/insert-subjectteacherinfo');
    }
    public function store(Request $request)
    {
        $subjectteacher = SubjectTeacher::create($request->all());
        return $subjectteacher;
        dd($request->all());
        $subjectteacher->save();

    }
}