<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;


class SubjectController extends Controller
{
    //
    
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        return view('subjects/insert-subjectinfo');
    }
    public function store(Request $request)
    {
        $subject = Subject::create($request->all());
        return $subject;
        dd($request->all());
        $subject->save();

    }

}
