<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

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
        abort_if(Gate::denies('edit_student'), '403', 'No tiene permiso para acceder a esta pagina');
        $student = Student::find($id);
        return view ('students/edit-student', compact('student'));
    }

    public function findcard($card)
    {
        return Student::where('card', $card)->get();
    }

    public function findid($id)
    {
        return Student::where('id', $id)->get();
    }

    public function findcode($code)
    {
        return Student::where('code', $code)->get();
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
