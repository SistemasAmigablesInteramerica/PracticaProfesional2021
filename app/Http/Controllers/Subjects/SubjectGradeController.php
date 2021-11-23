<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectGrade;

class SubjectGradeController extends Controller
{
    //
    Public function __construct()
    {
        
    }
     public function create()
    {
        return view('subjects/insert-subjectgradeinfo');
    }
    public function store(Request $request)
    {
        $subjectgrade = new SubjectGrade();
        $subjectgrade->fill($request->all());
        if($subjectgrade->save()){
            return response()->json(['message'=>'Se guardo con exito', 'data'=> $subjectgrade], 200);
        }
        return response()->json(['message'=>'No se guardo la materia', 'data'=> $subjectgrade], 421);
    }
    public function edit($id) 
    {
        $subjectgrade = SubjectGrade::find($id);

        return view('subjects/edit-subjectgrade',compact('subjectgrade'));
    }   
    public function update(Request $request, $id)
    {
        $subjectgrade = SubjectGrade::where('id',$id)->update($request->all());
        return $subjectgrade;
    }
    public function list(){
        return SubjectGrade::all();
    }
}
 
