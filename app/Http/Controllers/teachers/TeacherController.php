<?php

namespace App\Http\Controllers\teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Teacher;

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

    public function send(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return $teacher;
        dd($request->all());
        $teacher -> save();

    }
}
