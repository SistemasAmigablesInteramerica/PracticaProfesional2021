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
        return view('grades/insert-gradeinfo');
    }
    public function store(request $request)
    {
        $grade = new grade();
        $grade->name = $request->all('');
         $grade->save;
             return $this->responseSucess('mensaje');
         
    }
}
  