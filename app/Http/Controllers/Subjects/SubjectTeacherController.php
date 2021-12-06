<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectTeacher;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SubjectTeacherController extends Controller
{
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        abort_if(Gate::denies('create_subjecteacher'), '403', 'No tiene permiso para acceder a esta pagina');
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
    public function list(){
        return SubjectTeacher::all();
    }
}