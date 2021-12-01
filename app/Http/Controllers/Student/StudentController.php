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
        abort_if(Gate::denies('registro-de-estudiantes'), Response:: HTTP_FORBIDDEN, 'No tiene los permisos para acceder a esta pagina');
        return view('students/insert-studentsinfo');
    }

    public function MESSAGE()
    {
        return view('403');
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
