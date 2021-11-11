<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $grade = new GradeController();
        $grade->name = $request->all('');
        if($grades->save()){

            return $this->responseSuccess('mensaje');
        }
         
    }
} 

  