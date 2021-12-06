<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{
    //
    
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        abort_if(Gate::denies('create_subject'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('subjects/insert-subjectinfo');
    }
    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->fill($request->all());
        if($subject->save()){
            return response()->json(['message'=>'Se guardo con exito', 'data'=> $subject], 200);
        }

        return response()->json(['message'=>'No se guardo la materia', 'data'=> $subject], 421);

    } 
    public function edit($id) 
    {
        $subject = Subject::find($id);

        return view('subjects/edit-subject',compact('subject'));
    }   
    public function update(Request $request, $id)
    {
        $subject = Subject::where('id',$id)->update($request->all());
        return $subject;
    }    
    public function lists(){
        return Subject::all();
    }
    
}

