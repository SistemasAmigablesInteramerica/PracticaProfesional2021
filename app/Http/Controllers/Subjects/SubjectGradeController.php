<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectGrade;

class SubjectGradeController extends Controller
{
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        return view('subjects/insert-subjectgradeinfo');
    }
    public function store(Request $request)
    {
        $subjectgrade = SubjectGrade::create($request->all());
        return $subjectgrade;
        dd($request->all());
        $subjectgrade->save();

    }
}

