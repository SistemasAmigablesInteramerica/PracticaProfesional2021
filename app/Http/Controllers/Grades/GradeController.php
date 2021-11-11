<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        return view('Grades/insert-gradeinfo');
    }
    public function store(Request $request)
    {
        $grade = Grade::create($request->all());
        return $result;
        dd($request->all());
        $grade->save();

    }
         
    
} 

  