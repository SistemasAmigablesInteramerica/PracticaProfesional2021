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
        return view('grades/insert-gradeinfo');
    }
    public function store(Request $request)
    {
        $grade = new Grade();
        $grade->fill($request->all());
        if($grade->save()){
            return response()->json(['message'=>'Se guardo con exito','data'=> $grade], 200);
        }
        return response()->json(['message'=>'No se guardo el grado', 'data'=> $grade], 471);
    }
    public function edit($id) 
    {
        $grade = Grade::find($id);

        return view('grades/edit-grade',compact('grade'));
    }   
    public function lists()
    {
        return Grade::all();
    }
    
} 

  