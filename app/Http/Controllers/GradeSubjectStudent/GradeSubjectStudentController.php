<?php

namespace App\Http\Controllers\GradeSubjectStudent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GradeSubjectStudent;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class GradeSubjectStudentController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        // abort_if(Gate::denies('create_gradesubjectstudent'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('grades/insert-gradesubjectstudentinfo');
    }

    public function store(Request $request)
    {

        $gradesubjectstudent = new GradeSubjectStudent();
        $gradesubjectstudent->fill($request->all());
        if($gradesubjectstudent->save()){
            return response()->json(['message'=>'Se guardo con exito','data'=> $gradesubjectstudent], 200);
        }
        return response()->json(['message'=>'No se guardo la informacion', 'data'=> $gradesubjectstudent], 471);
    }
    public function edit($id) 
    {
        $gradesubjectstudent = GradeSubjectStudent::find($id);

        return view('grades/edit-gradesubjectstudent',compact('gradesubjectstudent'));
    }   

    public function update(Request $request, $id)
    {
        $gradesubjectstudent = GradeSubjectStudent::where('id',$id)->update($request->all());
        return $gradesubjectstudent;
    }
    public function list()
    {
        return GradeSubjectStudent::all();
    }
} 
 