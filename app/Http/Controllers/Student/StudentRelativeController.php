<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRelative;
use App\Models\Student;

class StudentRelativeController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        abort_if(Gate::denies('create-relatives'), '403', 'No tiene permiso para acceder a esta pagina');
        return view('students/insert-studentrelativesinfo');
    }

    public function store(Request $request)
    {
        $studentRelative = new StudentRelative();
        $studentRelative->fill($request->all());
        $studentRelative->save();
        return $studentRelative;
    }

    public function edit($id)
    {
        $studentRelative = StudentRelative::find($id);
        return view('students/edit-StudentRelative', compact('studentRelative'));
    }


    public function update(Request $request, $id)
    {
        $studentRelative = StudentRelative::where('id',$id)->update($request->all());
        return $studentRelative;
    }

    public function list()
    {
        return StudentRelative::all();
    }
}
