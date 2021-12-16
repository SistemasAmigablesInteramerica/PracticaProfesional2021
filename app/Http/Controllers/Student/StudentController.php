<?php

namespace App\Http\Controllers\Student;

use App\Entities\Config\Sysconf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
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
    { //where('user_id',Auth::user()->id)->
        $student = Student::first();
        return view('students/insert-studentsinfo',compact('student'));
    }

    public function store(Request $request)
    {
        $data = $request->all() ;
        $data['user_id']= Auth::user()->id;
        $student = new Student();
        $student->fill($data);
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
    public function uploadFile(Request $request)
    {
        if($request->hasFile('itemsFile'))
        {
            $file = $request->file('itemsFile');
            $name = $file->getClientOriginalName();
            $file->storeAs('constancias/', $name);
            return response()->json('constancias/'. $name, 200);
        }
    }

}
