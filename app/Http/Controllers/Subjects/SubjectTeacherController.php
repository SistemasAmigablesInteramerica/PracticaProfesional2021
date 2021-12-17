<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
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
        abort_if(Gate::denies('create_subjectteacher'), '403', 'No tiene permiso para acceder a esta pagina');
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
    public function edit($id)
    {
        abort_if(Gate::denies('edit_subjecteacher'), '403', 'No tiene permiso para acceder a esta pagina');
        $subjectteacher = SubjectTeacher::find($id);

        return view('subjects/edit-subjectteacher',compact('subjectteacher'));
    }
    public function update(Request $request, $id)
    {
        $subjectteacher = SubjectTeacher::where('id',$id)->update($request->all());
        return $subjectteacher;
    }
    public function lists()
    {
        return Teacher::with('subjectGrades.grades','subjectGrades.subject')->get();
    }

}
