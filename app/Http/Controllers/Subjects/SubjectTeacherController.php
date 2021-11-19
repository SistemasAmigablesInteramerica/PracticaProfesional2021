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
        $subjectteacher = new SubjectTeacher();
        $subjectteacher->fill($request->all());
        if($subjectteacher->save()){
            return response()->json(['message'=>'Se guardo con exito', 'data'=> $subjectteacher], 200);
        }
        return response()->json(['message'=>'No se guardo la materia', 'data'=> $subjectteacher], 421);
    }
    public function lists(){
        return SubjectTeacher::all();
    }
}