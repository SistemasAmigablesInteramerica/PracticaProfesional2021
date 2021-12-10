<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class GradeController extends Controller
{
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        abort_if(Gate::denies('create_grade'), '403', 'No tiene permiso para acceder a esta pagina');
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
        abort_if(Gate::denies('edit_grade'), '403', 'No tiene permiso para acceder a esta pagina');
        $grade = Grade::find($id);

        return view('grades/edit-grade',compact('grade'));
    }   

    public function update(Request $request, $id)
    {
        $grade = Grade::where('id',$id)->update($request->all());
        return $grade;
    }
    public function lists()
    {
        return Grade::all();
    }
    
} 

  