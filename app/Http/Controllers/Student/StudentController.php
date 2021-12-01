<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //

    public function __construct()
    {

    }

    public function index()
    {
        return view ('students/list-student');
    }

    public function create()
    {
        return view('students/insert-studentsinfo');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->fill($request->all());
        $student->save();
        return $student;
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view ('students/edit-student', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::where('id', $id)->update($request->all());
        return $student;
    }

    public function list()
    {
        return Student::all();
    }

}
