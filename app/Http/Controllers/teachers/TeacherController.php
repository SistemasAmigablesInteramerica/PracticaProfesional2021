<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function __construct()
    {

    }

    public function create()
    {
        return view('teachers/insert-teacherinfo');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->fill($request->all());
        $teacher->save();
        return $teacher;
    }

    public function edit($id)
    {   
        $teacher = Teacher::find($id);
        return view('teachers/edit-teachers', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::where('id', $id)->update($request->all());
        return $teacher;
    }

    public function list()
    {
        return Teacher::all();
    }
}
